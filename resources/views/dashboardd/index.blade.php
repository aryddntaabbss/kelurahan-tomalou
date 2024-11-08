@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Selamat Datang {{ Auth::user()->name }}</h1>
        </div><!-- End Page Title -->

        <!-- Left side columns -->

        <section class="section dashboard mt-5">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <a href="#">
                                    <div class="card-body">
                                        <h5 class="card-title">Admin</h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person-workspace"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $alluser }}</h6>
                                                <span class="text-muted small pt-2 ps-1">Jumlah Admin</span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Penduduk Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <a href="{{ route('datapenduduk') }}">
                                    <div class="card-body">

                                        <h5 class="card-title">Penduduk</h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $penduduk }}</h6>
                                                <span class="text-muted small pt-2 ps-1">Jumlah Penduduk</span>

                                            </div>
                                        </div>
                                </a>
                            </div>

                        </div>
                    </div><!-- End Penduduk Card -->

                    <!-- Postingan Card -->
                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card customers-card">
                            <a href="{{ route('posts') }}">
                                <div class="card-body">
                                    <h5 class="card-title">Postingan</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-earmark-richtext"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $posts }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Jumlah Postingan</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div><!-- End Postingan Card -->
                </div>
            </div><!-- End Left side columns -->

            {{-- <!-- Right side columns -->
                <div class="col-lg-4">

                </div><!-- End Right side columns --> --}}

            </div>
        </section>

    </main><!-- End #main -->

    @include('dashboardd.layouts.footer')
@endsection
