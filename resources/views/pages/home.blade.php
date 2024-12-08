@extends('layouts.main')
@section('body')
    <div style="overflow: hidden">
        @include('layouts.header')
        <main id="main">      
            @include('layouts.hero')
            <!-- ======= Sambutan Lurah Section ======= -->
            <section id="about" class="about " data-aos="fade-up">
                <div class="container">
                    <div class="section-title">
                        <h2>Sambutan Lurah</h2>
                    </div>
                    <div class="row">
                        @foreach ($data as $row)
                            <div class="col-lg-6 " data-aos="fade-right">
                                <img src="{{ asset('storage/' . $row->img) }}" class="img-fluid" alt=""
                                    width="400" />
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 `content" data-aos="fade-left">
                                <h3>{{ $row->nama_lurah }}</h3>
                                <p>{!! $row->body !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End About Us Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container">
                    <div class="text-center " data-aos="fade-up">
                       
                        <h3>Fungsi Website Kelurahan</h3>
                        <p>informasi seperti sejarah kelurahan, visi misi kelurahan, profil kelurahan, pemerintah kelurahan,
                            berita, produk kelurahan, galeri serta. Dengan adanya website kelurahan diharapkan sebagai
                            sarana
                            akuntabilitas dan transparasi publik serta promosi potensi-potensi wisata kelurahan dan
                            produk-produk unggulan kelurahan.</p>
                        {{-- <h3 class="cta-btn scrollto" href="#appointment">Fungsi Website Kelurahan</h3> --}}
                    </div>
                </div>
            </section>
            <!-- End Cta Section -->

            {{-- card --}}
            <div class="row informasi">
                <div class="col-lg-12">
                    <div class="container-fluid mt-5">
                        <div class="row d-flex justify-content-around">
                            @foreach ($posts as $post)
                                <div class="col-lg-5 col-md-5 col-sm-12 card mb-3" data-aos="fade-up">
                                    <a href="{{ route('detail_informasi',$post->slug) }}">
                                        <figure>
                                            <img src="{{ asset('storage/'.$post->img) }}" class="img-fluid card-img-top informasi-img"  alt="..." style="max-height: 350px">
                                        </figure>
                                    </a>
                                    <div class="card-body">
                                      <h5 class="card-title "><a href="{{ route('detail_informasi',$post->slug) }}">{{ $post->judul }}</a></h5>
                                      <p class="card-text">{!! $post->excerp !!}.</p>
                                      <p class="card-text"><a href="{{ route('detail_informasi',$post->slug) }}"><small><i class="bi bi-calendar3"></i> {{ $post->created_at->format('d M Y') }}</small></a></p>
                                    </div>
                                  </div>
                                  @endforeach
                                  
                        </div>
                    </div>
                   
                </div>
                <div class=" offset-md-3 " data-aos="fade-up">
                   <p class="">{{ $posts->links() }}</p> 
                </div>
                {{-- <div class="col-lg-3">
                    <div class="container-fluid mt-5">
                        <div class="card">
                            <ul class="list-group  list-group-flush">
                                <h5 class="p-3">Informasi Terbaru</h5>
                                @foreach ($info as $post)
                                    <li class="list-group-item"> 
                                        <a href="#">{{ $post->judul }}</a> 
                                        <p class="card-text mt-2"><a href="#"><small><i class="bi bi-calendar3"></i> {{ $post->created_at->diffForHumans() }}</small></a></p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                </div> --}}
            </div>
    {{-- end card --}}



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-right">
                    <div class="count-box">
                        <i class="bi bi-person-fill"></i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="{{ 312 }}"
                            data-purecounter-duration="1" class="purecounter"></span> --}}
                        <span data-purecounter-start="0" data-purecounter-end="{{ $datapendudukL }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk</p>
                        <h3>Laki-laki</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-person-fill"></i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="{{ 351 }}"
                            data-purecounter-duration="1" class="purecounter"></span> --}}
                        <span data-purecounter-start="0" data-purecounter-end="{{ $datapendudukP }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk</p>
                        <h3>Perempuan</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-left">
                    <div class="count-box">
                        <i class="bi bi-people-fill"></i>
                        {{-- <span data-purecounter-start="0" data-purecounter-end="{{ 663 }}"
                            data-purecounter-duration="1" class="purecounter"></span> --}}
                        <span data-purecounter-start="0" data-purecounter-end="{{ $datapenduduk }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk</p>
                        <h3>Total</h3>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- End Counts Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mb-0 pb-0">
        <div>
            <div id="map" style="height: 580px;" data-aos="fade-up"></div>
            {{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.952911165269!2d127.43045332814076!3d0.638570357123868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x329ccedfd29ba7e9%3A0x97859e704203661a!2sSeli%2C%20Tidore%2C%20Kota%20Tidore%20Kepulauan%2C%20Maluku%20Utara!5e1!3m2!1sid!2sid!4v1667637452720!5m2!1sid!2sid"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </section>
    <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    @include('layouts.footer')
    </div>
@endsection
