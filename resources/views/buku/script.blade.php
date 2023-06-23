<script>
    function simpan(id = ''){
          if(id == ''){
              var var_url = 'bukuAjax';
              var var_type = 'POST';
          }else{
              var var_url = 'bukuAjax/'+id ;
              var var_type = 'PUT';
          }
  
          $.ajax({
              url: var_url,
              type: var_type,
              data:{
                  nama_buku: $('#nama_buku').val(),
                  penulis: $('#penulis').val()
              },
              success:function(response){
                  if(response.errors){
                      console.log(response.errors);
                      $('.alert-danger').removeClass('d-none');
                      $('.alert-danger').append("<ul>");
  
                      $.each(response.errors, function(key, value){
                          $('.alert-danger').find('ul').append("<li>"+value+"</li>")
                      });
  
                      $('.alert-danger').append("</ul>");
  
                  }else{
                      $('.alert-success').removeClass('d-none');
                      $('.alert-success').html(response.success);
  
                  }
                  $('#myTable').DataTable().ajax.reload();
              }
          })
         };
  
      $(document).ready(function() {
      $('.btn-primary').on('click', function() {
        $('.modal-title').text('Tambah Data');
      });
    });
  
      $(document).ready(function(){
             $('#myTable').DataTable({
                 processing:true,
                 serverside:true,
                 ajax:"{{ url('bukuAjax') }}",
                 columns:[{
                     data:'DT_RowIndex',
                     name:'DT_RowIndex',
                     orderable:false,
                     searchable:false 
                 },{
                     data:'nama_buku',
                     name: 'Nama'
                 },{
                     data:'penulis',
                     name:'Penulis'
                 },{
                     data:'aksi',
                     name:'Aksi'
                 }]
             });
         });       
  
         $('.tbl-simpan').click(function(){
          simpan();
         
          // console.log(nama_buku+'-'+penulis);
          // GLOBAL SETUP
          $.ajaxSetup({
              headers:{
                  'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
              }
          })
  
          // simpan data
         
         });
  
         //edit
         $('body').on('click', '.tbl-edit', function(e){
          $('.modal-title').text('Edit Data');
          var id = $(this).data('id');
          $.ajax({
              url: 'bukuAjax/'+id+ '/edit',
              type:'GET', 
              success:function(response){
                  $('#exampleModal').modal('show');
                  $('#nama_buku').val(response.result.nama_buku);
                  $('#penulis').val(response.result.penulis);
                  $('body').on('click', '.tbl-simpan', function(e){
                    $('.modal-title').text('Edit Data');
                  simpan(id);
  
                  });
                  // console.log(response.result);
              }
          })
          // alert('id edt' +id);
  
         });
  
          //hapus data
          $('body').on('click', '.tbl-del', function(e){
          if(confirm('Apakah Ingin Menghapus Data?') == true){
              var id = $(this).data('id');
              $.ajaxSetup({
              headers:{
                  'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
              }
             
              
          })
              $.ajax({
                  url:'bukuAjax/'+id,
                  type:'DELETE',
  
              });
          }
              $('#myTable').DataTable().ajax.reload();
  
         });
  
         
         $('#exampleModal').on('hidden.bs.modal', function(){
          $('#nama_buku').val('');
          $('#penulis').val('');
  
          $('.alert-danger').addClass('d-none');
          $('.alert-danger').html('');
  
          $('.alert-success').addClass('d-none');
          $('.alert-success').html('');
         });
     </script>