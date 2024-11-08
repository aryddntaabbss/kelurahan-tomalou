@extends('dashboardd.layouts.main')
@section('body')
    @include('dashboardd.layouts.headerSide')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title ">Tambah Data Penduduk</h1>
                <form action="{{ route('create.datapenduduk') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Rw </label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="rw">
                                <option value="1">Rw 1</option>
                                <option value="2">Rw 2</option>
                                <option value="3">Rw 3</option>
                                <option value="4">Rw 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Rt</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="rt">
                                <option value="1">Rt 1</option>
                                <option value="2">Rt 2</option>
                                <option value="3">Rt 3</option>
                                <option value="4">Rt 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Dusun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="dusun">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{ old('alamat') }}">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk"
                                >
                            @error('no_kk')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('no_kk') is-invalid @enderror" name="nama_kepala_keluarga"
                                value="{{ old('nama_kepala_keluarga') }}">
                            @error('nama_kepala_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nik</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('nik') is-invalid @enderror" 
                                name="nik">
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                <option value="LAKI-LAKI">Laki-Laki</option>
                                <option value="PEREMPUAN">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Hubungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('hubungan') is-invalid @enderror"  name="hubungan">
                            @error('hubungan')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"  name="tempat_lahir">
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"  name="tanggal_lahir">
                            <small>hh/bb/tttt</small>
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Usia</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('usia') is-invalid @enderror"  name="usia">
                            @error('usia')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option selected>Pilih Status</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Janda/Duda">Janda/Duda</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('agama') is-invalid @enderror"  name="agama">
                            @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="golongan_darah" class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="golongan_darah" name="golongan_darah">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                                <option value="Tidak Tahu">Tidak Tahu</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror"  name="kewarganegaraan">
                            @error('kewarganegaraan')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Etnis/Suku</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('suku') is-invalid @enderror"  name="suku">
                            @error('suku')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">pendidikan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('pendidikan') is-invalid @enderror"  name="pendidikan">
                            @error('pendidikan')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"  name="pekerjaan">
                            @error('pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <small>
                                        <strong>{{ $message }}</strong>
                                    </small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>

                </form><!-- End General Form Elements -->
            </div>
        </div>
    </main>
    @include('dashboardd.layouts.footer')
@endsection
