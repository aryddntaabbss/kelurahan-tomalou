@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sejarah Kelurahan</h5>
                @foreach ($data as $row)
                    <form action="{{ route('sejarah.update', $row->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label for="d">Isi Sejarah</label>
                            <input id="body" class="form-control @error('body') is-invalid @enderror" type="hidden"
                                name="body" value="{{ old('body', $row->body) }}">
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
                {{-- <input id="body" class="form-control" type="hidden">
                <trix-editor input="body"></trix-editor> --}}
            </div>
        </div>
    </main>
    @include('dashboardd.layouts.footer')
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
@endsection
