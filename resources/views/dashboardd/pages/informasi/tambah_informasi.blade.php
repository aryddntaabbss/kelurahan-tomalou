@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Informasi Terbaru</h5>
                <!-- Floating Labels Form -->
                <form method="post" action="{{ route('posts.create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class=" mb-3">
                        <label for="inputNanme4" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"" id="inputNanme4" name="judul"
                            value="{{ old('judul') }}">
                            @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control @error('img') is-invalid @enderror" type="file" id="formFile" name="img">
                        @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class=" mb-3">
                        <label for="inputtext" class="form-label">Body</label>
                        <input id="body" class="form-control @error('body') is-invalid @enderror" type="hidden"
                            name="body" value="{{ old('body') }}">
                        @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <trix-editor input="body"></trix-editor>
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- End floating Labels Form -->

            </div>
        </div>
    </main>
    @include('dashboardd.layouts.footer')
@endsection
