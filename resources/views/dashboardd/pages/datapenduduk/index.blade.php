@extends('dashboardd.layouts.main')

@section('body')
@include('dashboardd.layouts.headerSide')

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Penduduk Kelurahan Seli</h5>

            <div class="col-lg-6">
                <a href="{{ route('tambah.datapenduduk') }}" class="btn btn-primary my-2">+ Tambah Data Penduduk</a>
            </div>

            <table class="table datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $index)
                    <tr>
                        <th>{{ $index->id }}</th>
                        <td>{{ $index->nama }}</td>
                        <td>{{ $index->nik }}</td>
                        <td>
                            <a href="{{ route('edit.datapenduduk', $index->nik) }}" class="btn btn-warning">edit</a>
                            <a href="{{ route('hapus.datapenduduk', $index->id) }}" data-nama="{{ $index->nama }}"
                                class="btn btn-danger tombolHapus">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@include('dashboardd.layouts.footer')

<!-- SweetAlert, Toastr, dan DataTables JS -->
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Inisialisasi DataTables dan SweetAlert untuk konfirmasi hapus -->
<script>
    $(document).ready(function() {

        // Konfirmasi Hapus menggunakan SweetAlert
        $('.tombolHapus').click(function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            var nama = $(this).data("nama");

            Swal.fire({
                title: "Anda Yakin?",
                text: "Data " + nama + " akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    Swal.fire('Terhapus', 'Data Anda telah berhasil dihapus.', 'success');
                }
            });
        });

        // Toastr untuk pesan sukses
        @if(Session::has("success"))
            toastr.success("{{ Session::get('success') }}");
        @endif
    });
</script>
@endsection