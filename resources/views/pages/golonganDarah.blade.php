@extends('layouts.main')

@section('body')
@include('layouts.header')

<main id="main">
  <section class="mt-5">
    <div class="container">
      <div class="mt-5 section-title" data-aos="fade-up">
        <h2>Pencarian Golongan Darah</h2>
      </div>

      <!-- Card -->
      <div class="card" data-aos="fade-up">
        <div class="card-body">
          @if ($golongan->count())
          <table class="table datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Golongan Darah</th>
                <th>RT</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($golongan as $index => $row)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->golongan_darah }}</td>
                <td>{{ $row->rt }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <h5 class="text-center mt-4">Data Tidak Ada</h5>
          @endif
        </div>
      </div>
      <!-- End Card -->
    </div>
  </section>
</main>
<!-- End #main -->

@include('layouts.footer')

<!-- Inisialisasi DataTables -->
<script>
  $(document).ready(function() {
        $('.datatable').DataTable({
            "paging": false,         // Menonaktifkan paginasi
            "info": true,            // Menampilkan informasi jumlah data
            "ordering": true,        // Aktifkan penyortiran kolom
            "searching": true,       // Aktifkan pencarian
        });
    });
</script>

@endsection