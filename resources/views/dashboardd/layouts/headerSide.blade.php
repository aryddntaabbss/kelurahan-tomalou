 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/LambangTidore.png') }}" alt="">
        <span class="d-none d-lg-block">HALAMAN ADMIN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
            {{-- <img src="niceadmin/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <i class="bi bi-person"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2"> {{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>{{ __('Keluar') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
              </a>
            </li>
            
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item ">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-house-door"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item ">
        <a class="nav-link collapsed" href="{{ route('datapenduduk') }}">
          <i class="bi bi-people"></i><span>Data Penduduk</span>
        </a>
      </li><!-- End Dashboard Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('datapenduduk') }}">
              <i class="bi bi-circle"></i><span>Data Penduduk</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-video2"></i><span>Profil</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('visimisiadmin') }}">
              <i class="bi bi-circle"></i><span>Visi & Misi</span>
            </a>
          </li>
          <li>
            <a href="{{ route('sejarahadmin') }}">
              <i class="bi bi-circle"></i><span>Sejarah</span>
            </a>
          </li>
          <li>
            <a href="{{ route('gambaranumumadmin') }}">
              <i class="bi bi-circle"></i><span>Gambaran Umum</span>
            </a>
          </li>
          <li>
            <a href="{{ route('perangkat.dashboard') }}">
              <i class="bi bi-circle"></i><span>Perangkat Kelurahan</span>
            </a>
          </li>
        </ul>
      </li><!-- Nav Profil-->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-hospital"></i><span>Kelembagaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('pkk.dashboard') }}">
              <i class="bi bi-circle"></i><span>Pemberdayaan Kesejahteraan Keluarga (PKK)</span>
            </a>
          </li>
          <li>
            <a href="{{ route('lpm.dashboard') }}">
              <i class="bi bi-circle"></i><span>Lembaga Pemberdayaan Masyarakat (LPM)</span>
            </a>
          </li>
        </ul>
      </li><!-- Nav Kelembagaan-->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('posts') }}">
          <i class="bi bi-easel2"></i>
          <span>Informasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('sambutanLurah') }}">
          <i class="bi bi-card-text"></i>
          <span>Sambutan Lurah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('banner.dashboard') }}">
          <i class="bi bi-card-image"></i>
          <span>Edit Banner</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('register') }}">
          <i class="bi bi-file-person"></i>
          <span>Tambah Admin</span>
        </a>
      </li>
      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile.edit') }}">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->
     
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Semua Admin</span>
        </a>
      </li><!-- End Tambah Admin Page Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          <span>Keluar</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </a>
      </li><!-- End F.A.Q Page Nav -->
    
    </ul>

  </aside><!-- End Sidebar-->