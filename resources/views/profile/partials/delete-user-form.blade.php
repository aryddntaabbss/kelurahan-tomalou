<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">Hapus Akun</h2>
        <p class="mt-1 text-sm text-gray-600">Masukan Kata Sandi Untuk Menghapus Akun.</p>
    </header>

    {{-- <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Delete Account</x-danger-button> --}}
    {{-- <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable> --}}
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <div class="mt-6">
                {{-- <x-input-label for="password" value="Password" class="sr-only" /> --}}
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-7">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                          <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-danger" />
                    </div>
                  </div>

                {{-- <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Password"
                /> --}}

                
            </div>
            <button type="submit" class="btn btn-danger">Hapus</button>

            {{-- <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div> --}}
        </form>
    {{-- </x-modal> --}}
</section>
