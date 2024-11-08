@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
              <h1 class="card-title">Tambah Admin</h1>
                <form class="row needs-validation" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="col-12 mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i><i class="bi bi-at"></i></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                <div class="invalid-feedback">Please enter your Password.</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="password_confirmation" class="form-label">Confirmation Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
                            <input id="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" required autocomplete="current-password_confirmation">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                <div class="invalid-feedback">Please enter your Password.</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-primary w-100" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </main><!-- End #main -->
    @include('dashboardd.layouts.footer')
@endsection
