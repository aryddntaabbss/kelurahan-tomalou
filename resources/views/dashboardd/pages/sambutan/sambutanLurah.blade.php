@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')

    <main id="main" class="main">

        <div class="card">
            <div class="card-body">
                @foreach ($data as $row)
                    <h1 class="card-title">Sambutan Lurah {{ $row->nama_lurah }}</h1>
                    <div class="my-3">
                        <a href="{{ route('show.sambutanLurah', $row->id) }}" class="btn btn-primary btn-lg"><i class="bi bi-brush"></i> Edit Sambutan</a>
                    </div>
                    <img src="{{ asset('storage/'.$row->img) }}" class="" alt="..." width="300">
                    <h5 class="card-title">{{ $row->nama_lurah }}</h5>
                    <p class="card-text">{!! $row->body !!}</p>
                    <div class="my-3">
                    </div>
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
