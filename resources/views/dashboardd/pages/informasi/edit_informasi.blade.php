@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Informasi</h5>
                <!-- Floating Labels Form -->
                <form class="row g-3 " method="post" action="{{ route('post.update', $posts->slug) }}"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="col-lg-8">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Judul</label>
                                <textarea class="form-control @error('judul') is-invalid @enderror"" id="exampleFormControlTextarea1" name="judul" rows="3">{{ $posts->judul }}</textarea>
                                @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            {{-- <label for="inputNanme4" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="inputNanme4" name="judul"
                                value="{{ old('judul', $posts->judul) }}"> --}}
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <input type="hidden" value="{{ $posts->img }}" name="oldimage">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control @error('img') is-invalid @enderror" type="file" id="formFile"
                            name="img">
                        @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class=" mb-3 col-lg-12">
                        <label for="inputtext" class="form-label">Body</label>
                        <input id="body" class="form-control @error('body') is-invalid @enderror" type="hidden"
                            name="body" value="{{ old('body', $posts->body) }}">
                        @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <trix-editor input="body"></trix-editor>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form><!-- End floating Labels Form -->

            </div>
        </div>
    </main>
    @include('dashboardd.layouts.footer')
@endsection
