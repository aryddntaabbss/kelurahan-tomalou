@extends('layouts.main')

@section('body')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}

    <main id="main">
        <section class="mt-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="mt-5">Visi & MIsi</h2>
                </div>
                @foreach ($data as $row)
                    <h2>Visi :</h2>
                    <p>{!! $row->visi !!}</p>

                    <h2>Misi :</h2>
                    {!! $row->misi !!}
                @endforeach
            </div>


        </section>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
@endsection
