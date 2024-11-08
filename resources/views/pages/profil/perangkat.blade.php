@extends('layouts.main')

@section('body')
@include('layouts.header')
{{-- @include('layouts.hero') --}}

<main id="main">
  <section class="mt-5">
    <div class="container">
      <div class="section-title" >
        <h2 class="mt-5" data-aos="fade-up">PERANGKAT KELURAHAN</h2>
      </div>

  <section id="doctors" class="doctors">
      <div class="container" data-aos="fade-up">
        {{-- <div class="section-title">
          <h2>Perangkat Kelurahan</h2>
        </div> --}}
       {{-- <img src="{{ asset('assets/img/perangkat.png') }}" alt=""> --}}
       @foreach ($perangkat as $i)
           
       <img src="{{ asset('storage/'.$i->img) }}" alt="" class="img-fluid d-block"  width="100%">
       @endforeach
      
    </div>
    </section> 
      
        </div>


  </section>

</main>
  <!-- End #main -->
@include('layouts.footer')
@endsection