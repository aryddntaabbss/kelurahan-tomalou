    <div class="col-lg-3 col-sm-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Statistik Penduduk</h5>
                <ul class="list-group ">
                    <a href="{{ route('pendidikan') }}">
                        <li class="list-group-item border-0 {{ Request::is('data-kelurahan/pendidikan') ? 'active' : '' }}">Data Pendidikan Dalam KK</li>
                    </a>
                    <a href="{{ route('pekerjaan') }}">
                        <li
                            class="list-group-item border-0 {{ Request::is('data-kelurahan/pekerjaan') ? 'active' : '' }}">
                            Data Pekerjaan</li>
                    </a>
                    <a href="{{ route('agama') }}">
                        <li class="list-group-item border-0 {{ Request::is('data-kelurahan/agama') ? 'active' : '' }}">Data Agama</li>
                    </a>
                    <a href="{{ route('jeniskelamin') }}">
                        <li class="list-group-item border-0 {{ Request::is('data-kelurahan/jenis-kelamin') ? 'active' : '' }}">Data Jenis Kelamin</li>
                    </a>
                    <a href="{{ route('kelompokumur') }}">
                        <li class="list-group-item border-0 {{ Request::is('data-kelurahan/kelompok-umur') ? 'active' : '' }}">Data Kelompok Umur</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    