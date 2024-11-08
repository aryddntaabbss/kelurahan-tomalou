@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Visi & Misi</h5>
@foreach ($data as $row)
                <form action="{{ route('visimisi.update',$row->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <label for="visi">Visi</label>
                        <input id="visi" class="form-control @error('visi') is-invalid @enderror" type="hidden"
                            name="visi" value="{{ old('visi',$row->visi) }}">
                        @error('visi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <trix-editor input="visi"></trix-editor>
                    </div>

                    <div class="row mb-3">
                        <label for="misi">Misi</label>
                        <input id="misi" class="form-control @error('misi') is-invalid @enderror" type="hidden"
                            name="misi" value="{{ old('misi',$row->misi) }}">
                        @error('misi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <trix-editor input="misi"></trix-editor>
                    </div>
                    <button class="btn btn-primary">Simpan</button>
                </form>
                @endforeach
            </div>
        </div>
    </main>
    @include('dashboardd.layouts.footer')
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if(Session::has("success"))
         toastr.success("{{ Session::get('success') }}");
         @endif
    </script>
@endsection
