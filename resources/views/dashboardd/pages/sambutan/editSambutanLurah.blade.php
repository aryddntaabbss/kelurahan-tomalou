@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')

    <main id="main" class="main">

        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Edit Sambutan Lurah</h1>
                {{-- <div class="col-10">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div> --}}
                <form action="{{ route('update.sambutanLurah', $sambutanLurah->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="oldimage" value="{{ $sambutanLurah->img }}">
                    <div class="row mb-3">
                        <label for="inputtext" class="form-label">Nama Lurah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama_lurah') is-invalid @enderror"
                                name="nama_lurah" value="{{ old('nama_lurah', $sambutanLurah->nama_lurah) }}">
                            @error('nama_lurah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        {{-- <div class="col-lg-2">
                            <img src="{{ asset('storage/'.$sambutanLurah->img) }}" alt="" class="img-fluid d-block">
                        </div> --}}
                        <label for="inputtext" class="form-label">Foto Lurah</label>
                        
                        <div class="col-sm-10">
                            <input class="form-control @error('img') is-invalid @enderror" type="file" id="formFile"
                                name="img">
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputtext" class="form-label">Isi Sambutan</label>
                        <input id="body" class="form-control @error('body') is-invalid @enderror" type="hidden" name="body" value="{{ old('body', $sambutanLurah->body) }}">
                        @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <trix-editor input="body"></trix-editor>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>


    </main><!-- End #main -->

    @include('dashboardd.layouts.footer')

   
@endsection
