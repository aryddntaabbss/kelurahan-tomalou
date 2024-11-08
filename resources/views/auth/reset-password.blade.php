@extends('dashboardd.layouts.main')
@section('body')
    <main>
        <div class="container ">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
                                        <p class="text-center small">Masukan Email</p>
                                    </div>


                                    <form method="POST" action="{{ route('password.store') }}">
                                        @csrf
                            
                                        <!-- Password Reset Token -->
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            
                                        <!-- Email Address -->
                                        <div>
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $request->email) }}" required autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                        </div>
                            
                                        <!-- Password -->
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                              <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
                                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                              @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                  {{ $message }}
                                                </span>
                                                <div class="invalid-feedback">Please enter your Password.</div>
                                              @enderror
                                            </div>
                                          </div>

                                           <!-- Confirm Password -->
                                          <div class="col-12">
                                            <label for="password_confirmation" class="form-label">Confirmation Password</label>
                                            <div class="input-group has-validation">
                                              <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
                                              <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password_confirmation">
                                              @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                  {{ $message }}
                                                </span>
                                                <div class="invalid-feedback">Please enter your Password.</div>
                                              @enderror
                                            </div>
                                          </div>
                                        {{-- <div class="mt-4">
                                            <x-input-label for="password" :value="__('Password')" />
                            
                                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                            
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                            
                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            
                                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password_confirmation" required />
                            
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                             --}}
                                        <div class="flex items-center justify-end mt-4">
                                            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
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

       