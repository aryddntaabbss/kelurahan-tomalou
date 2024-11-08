@extends('dashboardd.layouts.main')
@section('body')
@include('dashboardd.layouts.headerSide')
<main id="main" class="main">       
    <div class="card">
        <div class="card-body">
          <div class="card">
            <img src="{{ asset('storage/' . $posts->img) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="mb-3">

                <h5 class="card-title mb-0 pb-0">{{ $posts->judul }}</h5>
                <small> Dibuat Pada {{ $posts->created_at->format('d M Y') }}</small>
              </div>
              <p class="card-text">{!! $posts->body !!}</p>

            </div>
          </div><!-- End Card with an image on top -->
        </div>
      </div>
</main>
@include('dashboardd.layouts.footer')

@endsection
