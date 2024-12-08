@extends('layouts.main')

@section('body')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}

    <main id="main">
        <section class="mt-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="mt-5">Lembaga Pemberdayaan Masyarakat (LPM) </h2>
                </div>
                
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($lpm as $i)
                    <div class="col-lg-12 pt-4 pt-lg-0 `content" data-aos="fade-left">
                        {!! $i->body !!}
                    </div>
                    <div class="col-lg-12 " data-aos="fade-right">
                        <div class="text-center my-5">
                            <h4>SUSUNAN LEMBAGA PEMBERDAYAAN MASYARAKAT (LPM)</h4>
                            <h4>KELURAHAN TOMALOU</h4>
                        </div>
                       
                        <img src="{{ asset('storage/' . $i->img) }}" alt="" class="img-fluid d-block">
                    </div>
                    @endforeach
                </div>
            </div>

        </section>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
@endsection
