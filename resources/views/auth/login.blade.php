@extends('dashboardd.layouts.main')
@section('body')
<main class="login-background">
    <div class="container ">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        {{-- <div class="d-flex justify-content-center py-3 px-3 mb-1 rounded bg-black">
                            <a href="/" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/img/LambangTidore.png') }}" alt="">
                        <span class="d-none d-lg-block text-white">Kelurahan Tomalou</span>
                        </a>
                    </div><!-- End Logo --> --}}

                    <div class="card mb-3">

                        <div class="card-body">
                            <div class="d-flex justify-content-center mt-3">
                                <a href="/" class="login-logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets/img/LambangTidore.png') }}" alt="">
                                </a>
                            </div><!-- End Logo -->

                            <div class="pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">LOGIN KE AKUN ANDA</h5>
                                <p class="text-center small">Masukan Email & password untuk login</p>
                            </div>

                            <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="bi bi-person-fill"></i></span>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="bi bi-lock-fill"></i></span>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <small class="">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('password.request') }}">
                                        {{ __('Lupa password?') }}
                                    </a>
                                    @endif
                                </small>
                                <div class="col-12">


                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
    </div>

    </section>

    </div>
</main><!-- End #main -->
@endsection