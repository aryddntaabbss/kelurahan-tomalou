@extends('layouts.main')

@section('body')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}

    <main id="main">
        <section class="mt-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="mt-5">Gambaran Umum Kelurahan</h2>
                </div>
               @foreach ($data as $i)
                   <p>{!! $i->body !!}</p>
               @endforeach
            </div>
        </section>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
@endsection
