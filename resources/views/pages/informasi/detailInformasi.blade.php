@extends('layouts.main')
@section('body')
@include('layouts.header')
<main id="main">
  <section class="mt-5">
    <div class="container">
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-around">
              <div class="col-lg-9">

                <div class="card mb-3" data-aos="fade-up">
                  <img src="{{ asset('storage/' . $posts->img) }}" class="card-img-top informasi-img"
                  alt="..." width="300px">
                  <div class="card-body">
                    <h5 class="card-title ">{{ $posts->judul }}</h5>
                    <p class="card-text"><small><i class="bi bi-calendar3"></i>
                      {{ $posts->created_at->format('d M Y')  }}</small></p>
                      <p class="card-text">{!! $posts->body !!}</p>
                      
                    </div>
                  </div>
                </div>
              </div>
        </div>
         
    </div>
  </section>

</main>
  <!-- End #main -->
  @include('layouts.footer')
@endsection
