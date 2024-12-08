<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="align-items-center d-none d-md-flex">
      {{-- <i class="fa-regular fa-envelope"></i> kelurahan.tomalou@gmail.com --}}
    </div>
    <div class="d-flex align-items-center">
      {{-- <i class="bi bi-telephone-inbound"></i> 081342007749 --}}
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <a href="/" class="logo ms-0 me-auto"><img src="{{ asset('assets/img/LambangTidore.png') }}" alt="" /></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <h5 class="me-auto ms-2"><a href="/">KELURAHAN TOMALOU</a></h5>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">BERANDA</a></li>
        <li class="dropdown">
          <a class="nav-link {{ Request::is('profil*') ? 'active' : '' }}" href="#"><span>PROFIL</span> <i
              class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('visimisi') }}">Visi & Misi</a></li>
            {{-- <li><a href="{{ route('sejarah') }}">Sejarah Kelurahan</a></li> --}}
            <li><a href="{{ route('gambaranumum') }}">Gambaran Umum</a></li>
            <li><a href="{{ route('perangkat') }}">Kepala Kelurahan & Struktur Organisasi Kelurahan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="nav-link {{ Request::is('kelembagaan*') ? 'active' : '' }}" href="#"><span>KELEMBAGAAN</span> <i
              class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('pkk') }}">Pemberdayaan Kesejahteraan Masyarakat (PKK)</a></li>
            <li><a href="{{ route('lpm') }}">Lembaga Pemberdayan Masyarakat (LPM)</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="nav-link {{ Request::is('data-kelurahan*') ? 'active' : '' }}" href="#"><span>DATA KELURAHAN</span>
            <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('pendidikan') }}">Data Pendidikan Dalam KK</a></li>
            <li><a href="{{ route('pekerjaan') }}">Data Pekerjaan</a></li>
            <li><a href="{{ route('agama') }}">Data Agama</a></li>
            <li><a href="{{ route('jeniskelamin') }}">Data Jenis Kelamin</a></li>
            <li><a href="{{ route('kelompokumur') }}">Data Kelompok Umur</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto {{ Request::is('golongan-darah') ? 'active' : '' }}"
            href="{{ route('golongan') }}">GOLONGAN DARAH</a></li>
        <li><a class="nav-link scrollto {{ Request::is('informasi*') ? 'active' : '' }}" href="/informasi">INFORMASI</a>
        </li>
        <li><a class="nav-link scrollto {{ Request::is('peta-*') ? 'active' : '' }}" href="{{ route('peta.kelurahan') }}">PETA KELURAHAN</a></li>
        {{-- <li class="dropdown">
          <a class="nav-link {{ Request::is('peta-*') ? 'active' : '' }}" href="#"><span>PETA KELURAHAN</span> <i
              class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('peta.kelurahan') }}">Peta Kalurahan</a></li>
            <li><a href="{{ route('peta.jaringan') }}">Penyebaran Jaringan Wifi</a></li>
          </ul>
        </li> --}}
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
  </div>
</header>
<!-- End Header -->