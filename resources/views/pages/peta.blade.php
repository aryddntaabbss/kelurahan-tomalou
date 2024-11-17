@extends('layouts.main')

@section('body')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}

    <main id="main">
        <section class="mt-5">
            <div class="container">
                <div class="mt-5 section-title" data-aos="fade-up">
                    <h2>Peta Kelurahan Tomalou</h2>
                </div>
                <div id="map" style="height: 580px;" data-aos="fade-up"></div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    @include('layouts.footer')

@endsection
