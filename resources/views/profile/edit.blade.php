@extends('dashboardd.layouts.main')
@section('body')
@include('dashboardd.layouts.headerSide')
<main id="main" class="main">


    @include('profile.partials.update-profile-information-form')
    @include('profile.partials.update-password-form')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</main>
 @include('dashboardd.layouts.footer')
@endsection


