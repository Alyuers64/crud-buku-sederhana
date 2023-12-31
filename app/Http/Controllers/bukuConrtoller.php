<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class bukuConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = buku::orderBy('nama_buku', 'asc');
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('aksi', function($data){
            return view('buku.tombol')->with('data', $data);
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(),[
            'nama_buku'=>'required',
            'penulis' => 'required',
        ],[
            'nama_buku.required' =>'Masukan Judul Buku',
            'penulis.required' =>'Masukan Nama Penulis Buku',
        ]);

        if($validasi->fails()){
            return response()->json(['errors'=>$validasi->errors()]);

        }
        else{
            $data = [
                'nama_buku' => $request->nama_buku,
                'penulis' => $request->penulis
            ];
            buku::create($data);
            return response()->json(['success'=>"Berhasil Menyimpan Data"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = buku::where('id',$id)->first();
        return response()->json(['result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = Validator::make($request->all(),[
            'nama_buku'=>'required',
            'penulis' => 'required',
        ],[
            'nama_buku.required' =>'Masukan Judul Buku',
            'penulis.required' =>'Masukan Nama Penulis Buku',
        ]);

        if($validasi->fails()){
            return response()->json(['errors'=>$validasi->errors()]);

        }
        else{
            $data = [
                'nama_buku' => $request->nama_buku,
                'penulis' => $request->penulis
            ];
            buku::where('id', $id)->update($data);
            return response()->json(['success'=>"Berhasil Update Data"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buku::where('id',$id)->delete();
    }
}