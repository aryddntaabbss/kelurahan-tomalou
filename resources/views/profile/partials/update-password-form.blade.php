<div class="card">
    <div class="card-body">
        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900 mt-3">Update Password</h2>
                <p class="mt-1 text-sm text-gray-600">Ensure your account is using a long, random password to stay
                    secure.</p>
            </header>

            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')


                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-7">
                        <input type="password" name="current_password" class="form-control" id="inputPassword"
                            autocomplete="current-password">
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-7">
                        <input type="password" name="password" class="form-control" autocomplete="password">
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Konfirmasi Password Baru</label>
                    <div class="col-sm-7">
                        <input type="password" name="password_confirmation" class="form-control"
                            autocomplete="password_confirmation">
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-danger" />
                    </div>
                </div>

                {{-- <div>
                    <x-input-label for="current_password" :value="__('Current Password')" />
                    <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div> --}}

                {{-- <div>
                    <x-input-label for="password" :value="__('New Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div> --}}

                {{-- <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div> --}}

                <div class="flex items-center gap-4">
                    {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
                    <button type="submit" class="btn btn-primary">Save</button>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">Saved.</p>
                    @endif
                </div>
            </form>
        </section>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.2.min.js"
    integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if (session('status') === 'password-updated')
        toastr.success("{{ Session::get('status') }}");
    @endif
</script>
