<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Data Buku</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
  <main class="container-fluid">    
    <!-- START FORM -->
    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger d-none"></div>
            <div class="alert alert-success d-none"></div>
            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_buku" id="nama_buku">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="email" class="col-sm-2 col-form-label">Penulis</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="penulis" id="penulis">
              </div>
            </div>   
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tbl-tutup" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary tbl-simpan">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- AKHIR FORM -->

    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <h4 class="mb-4" id="">Data Buku Perpustakaan</h4>

      <!-- TOMBOL TAMBAH DATA -->
      <div class="pb-3 d-flex">
        <a href='' class="btn btn-success btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
      </div>
      <table class="table table-striped table-responsive" id="myTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- AKHIR DATA -->
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 
  @include('buku.script')
</body>
</html>
