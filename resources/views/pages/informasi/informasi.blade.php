@extends('layouts.main')

@section('body')
@include('layouts.header')

<main id="main">
    <section class="mt-5">
        <div class="container">
            <div class="mt-5 section-title" data-aos="fade-up">
                <h2>Informasi Kelurahan</h2>
            </div>

            <!-- Input Pencarian -->
            <div class="row mb-4">
                <div class="col-lg-6 mx-auto">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari Informasi...">
                </div>
            </div>

            <!-- Cards -->
            <div class="row informasi">
                <div class="col-lg-12">
                    <div class="container-fluid mt-5">
                        <div class="row d-flex justify-content-around" id="informasiCards">
                            @foreach ($posts as $post)
                            <div class="col-lg-5 col-sm-12 card mb-3 informasi-card" data-aos="fade-up">
                                <figure>
                                    <a href="{{ route('detail_informasi', $post->slug) }}">
                                        <img src="{{ asset('storage/' . $post->img) }}"
                                            class="card-img-top informasi-img" alt="..." style="max-height: 350px">
                                    </a>
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('detail_informasi', $post->slug) }}">{{ $post->judul }}</a>
                                    </h5>
                                    <p class="card-text">{!! $post->excerp !!}</p>
                                    <p class="card-text">
                                        <a href="{{ route('detail_informasi', $post->slug) }}">
                                            <small><i class="bi bi-calendar3"></i>
                                                {{ $post->created_at->format('d M Y') }}</small>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <p class="text-center">{{ $posts->links() }}</p>
                </div>
            </div>
            <!-- End Cards -->

        </div>
    </section>
</main>
<!-- End #main -->

@include('layouts.footer')

<!-- Script untuk Pencarian Kartu Informasi -->
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let cards = document.querySelectorAll('.informasi-card');

            cards.forEach(card => {
                let title = card.querySelector('.card-title').textContent.toLowerCase();
                if (title.includes(filter)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
</script>
@endsection