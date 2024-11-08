@extends('layouts.main')

@section('body')
@include('layouts.header')
{{-- @include('layouts.hero') --}}

<main id="main">
  <section class="mt-5">
    <div class="container-fluid">

    <section id="doctors" class="doctors">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title">
          <h2>Data Pekerjaan</h2>
        </div>
      
        
        <div class="row">
          <div class="col-lg-3 col-sm-12 mb-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Statistik Penduduk</h5>
                      <ul class="list-group">
                          <a href="{{ route('pendidikan') }}">
                              <li class="list-group-item ">Data Pendidikan Dalam KK</li>
                          </a>
                          <a href="{{ route('pekerjaan') }}">
                              <li
                                  class="list-group-item {{ Request::is('data-kelurahan/pekerjaan') ? 'active' : '' }}">
                                  Data Pekerjaan</li>
                          </a>
                          <a href="#">
                              <li class="list-group-item">Data Wilayah Adminstratif</li>
                          </a>
                          <a href="{{ route('agama') }}">
                              <li class="list-group-item">Data Agama</li>
                          </a>
                          <a href="{{ route('jeniskelamin') }}">
                              <li class="list-group-item ">Data Jenis Kelamin</li>
                          </a>
                          <a href="{{ route('kelompokumur') }}">
                              <li class="list-group-item">Data Kelompok Umur</li>
                          </a>
                          <a href="#">
                              <li class="list-group-item active">Data Pembangunan</li>
                          </a>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-lg-8">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">.</h5>

                      <p>Halaman ini berisi tautan menuju informasi mengenai Basis Data Desa. Ada dua jenis data yang dimuat dalam sistem ini, yakni basis data kependudukan dan basis data sumber daya desa. Sila klik pada tautan berikut untuk mendapatkan tampilan data statistik per kategori.

                        Data Wilayah Administratif         
                        Data Pendidikan         
                        Data Pekerjaan         
                        Data Golongan Darah         
                        Data Agama         
                        Data Jenis Kelamin         
                        Data Kelompok Umur         
                        Data Penerima Raskin         
                        Data Penerima BPJS        
                        Data Warga Negara              
                        Data yang tampil adalah statistik yang didapatkan dari proses olah data dasar yang dilakukan secara offline di kantor desa secara rutin/harian. Data dasar di kantor desa diunggah ke dalam sistem online di website ini secara berkala. Sila hubungi kontak pemerintah desa untuk mendapatkan data dan informasi desa termutakhir.</p>

                  </div>
              </div>
          </div>
      </div>
        </div>
        
    </section> 
      
        </div>
    </section>

</main>
  <!-- End #main -->
@include('layouts.footer')
@endsection