@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')

    <main id="main" class="main">

        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Edit Pemberdayaan Kesejahteraan Keluarga (PKK)</h1>
                @foreach ($pkk as $i)
                    
                <img src="{{ asset('storage/'.$i->img) }}" alt="" class="img-fluid d-block" width="300">
                {{-- <a class="btn btn-primary" href="{{ route('perangkat.show',$i->id) }}">a</a> --}}
                <form action="{{ route('pkk.update',$i->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                <div class="row mb-3 mt-5">
                    <input type="hidden" name="oldimage" value="{{ $i->img }}">
                    {{-- <div class="col-lg-2">
                        <img src="{{ asset('storage/'.$sambutanLurah->img) }}" alt="" class="img-fluid d-block">
                    </div> --}}
                    <label for="inputtext" class="form-label">Foto </label>
                    
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
                    <label for="inputtext" class="form-label">Body</label>
                    <input id="body" class="form-control @error('body') is-invalid @enderror" type="hidden" name="body" value="{{ old('body', $i->body) }}">
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <trix-editor input="body"></trix-editor>
                </div>
                <button class="btn btn-primary">Simpan</button>
                </form>
                @endforeach
            </div>

        </div>


    </main><!-- End #main -->

    @include('dashboardd.layouts.footer')
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if(Session::has("success"))
         toastr.success("{{ Session::get('success') }}");
         @endif
    </script>
@endsection
