@extends('dashboardd.layouts.main')
@section('body')
@include('dashboardd.layouts.headerSide')
<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profil Admin</h5>

          <!-- General Form Elements -->
          <form>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="{{  Auth::user()->name }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" value="{{  Auth::user()->email }}">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>
</main>
@include('dashboardd.layouts.footer')
@endsection
