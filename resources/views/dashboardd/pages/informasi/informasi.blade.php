@extends('dashboardd.layouts.main')
@section('body')
@include('dashboardd.layouts.headerSide')
<main id="main" class="main">       
         <div class="card">
            <div class="card-body">
              <h5 class="card-title ">Informasi</h5>
              <div class="col-lg-6">
                <form >
                <div class="input-group mb-3 mt-3">
                  <input type="text" class="form-control" name="cari" placeholder="Cari...">
                  <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
                </form>
              </div>
              <!-- Table with stripped rows -->
               <!-- Primary Color Bordered Table -->
               <div class="my-2">
                   <a href="{{ route('posts.tambah') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Informasi</a>
               </div>
               @if ($posts->count())
               <table class="table table-bordered border-primary text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Di Buat Pada</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                          
                     
                  @foreach ($posts as $index => $row)
                  <tr>
                    <th>{{ $index + 1 }}</th>
                    <th><img class="img-fluid" src="{{ asset('storage/' . $row->img) }}" alt="" width="300px"></th>
                    <td>{{ $row->judul }}</td>       
                    <td>{{ $row->created_at->format('d M Y') }}</td>
                    <td width='200px'>
                        <a href="{{ route('post.show',$row->slug) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('post.edit',$row->slug) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <a href="{{ route('post.hapus',$row->id) }}" class="btn btn-danger d-inline tombolHapus" data-nama="{{ $row->judul }}"><i class="bi bi-trash"></i></a>
                    </td>       
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class=" offset-md-3 " data-aos="fade-up">
                <p class="">{{ $posts->links() }}</p> 
             </div>
             @else
                       <h1>Yang anda cari tidak di temukan</h1>   
             @endif
              <!-- End Primary Color Bordered Table -->
              <!-- End Table with stripped rows -->

            </div>
          </div>
</main>
@include('dashboardd.layouts.footer')
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

  $('.tombolHapus').click(function(e) {
      e.preventDefault();

      var link = $(this).attr("href");
      var nama = $(this).attr("data-nama");
      Swal.fire({
          title: "Anda Yakin?",
          text: "Data "+nama+" Akan Di Hapus Secara Permanen!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location = link;
              Swal.fire(
                  'Terhapus',
                  'Data anda telah berhasil di hapus.',
                  'success'
              )
          }
      })
  })

 
</script>   
<script>
    @if(Session::has("success"))
     toastr.success("{{ Session::get('success') }}");
     @endif
</script>
@endsection
