@extends('layouts.main')

@section('body')
    @include('layouts.header')
    {{-- @include('layouts.hero') --}}

    <main id="main">
        <section class="mt-5">
            <div class="container-fluid">

                <section id="doctors" class="doctors">
                    <div class="container-fluid" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Data Pekerjaan</h2>
                        </div>
                        <div class="row">
                            @include('layouts.navside')
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Grafik Pekerjaan</h5>

                                        <!-- Pie Chart -->
                                        <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                echarts.init(document.querySelector("#pieChart")).setOption({
                                                    // title: {
                                                    //     text: 'Referer of a Website',
                                                    //     subtext: 'Fake Data',
                                                    //     left: 'center'
                                                    // },
                                                    tooltip: {
                                                        trigger: 'item'
                                                    },
                                                    // legend: {
                                                    //     top: 'bottom',
                                                    //     // left: 'center'
                                                    // },
                                                    toolbox: {
                                                        show: true,
                                                        feature: {
                                                            mark: {
                                                                show: true
                                                            },
                                                            dataView: {
                                                                show: true,
                                                                readOnly: false
                                                            },
                                                            restore: {
                                                                show: false
                                                            },
                                                            saveAsImage: {
                                                                show: true
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: 'Populasi',
                                                        type: 'pie',
                                                        radius: '50%',
                                                        data: [{
                                                                value: {{ $wiraswasta }},
                                                                name: 'Wiraswasta'
                                                            },
                                                            {
                                                                value: {{ $ibuRumahtangga }},
                                                                name: 'Ibu Rumah Tangga'
                                                            },
                                                            {
                                                                value: {{ $pelajar }},
                                                                name: 'Pelajar'
                                                            },
                                                            {
                                                                value: {{ $belumbekerja }},
                                                                name: 'Belum Bekerja'
                                                            },
                                                            {
                                                                value: {{ $karyawanhonorer }},
                                                                name: 'Karyawan Honorer'
                                                            },
                                                            {
                                                                value: {{ $pns }},
                                                                name: 'Pegawai Negeri Sipil'
                                                            },
                                                            {
                                                                value: {{ $karyawanswasta }},
                                                                name: 'Karyawan Perusahaan Swasta'
                                                            },
                                                            {
                                                                value: {{ $petani }},
                                                                name: 'Petani'
                                                            },
                                                            {
                                                                value: {{ $pensiunan }},
                                                                name: 'Purnawirawan/Pensiunan'
                                                            },
                                                            {
                                                                value: {{ $guruswasta }},
                                                                name: 'Guru swasta'
                                                            },
                                                            {
                                                                value: {{ $sopir }},
                                                                name: 'Sopir'
                                                            },
                                                            {
                                                                value: {{ $tukangbatu }},
                                                                name: 'Tukang Batu'
                                                            },
                                                            {
                                                                value: {{ $tukangkayu }},
                                                                name: 'Tukang Kayu'
                                                            },
                                                            {
                                                                value: {{ $tidakmempunyaipekerjaantetap }},
                                                                name: 'Tidak Mempunyai Pekerjaan Tetap'
                                                            },
                                                            {
                                                                value: {{ $montir }},
                                                                name: 'Montir'
                                                            },
                                                            {
                                                                value: {{ $POLRI }},
                                                                name: 'POLRI'
                                                            },
                                                            {
                                                                value: {{ $TNI }},
                                                                name: 'TNI'
                                                            },
                                                            {
                                                                value: {{ $pemilikwarung }},
                                                                name: 'Pemilik usaha warung, rumah makan dan restoran'
                                                            },
                                                            {
                                                                value: {{ $dosenswasta }},
                                                                name: 'Dosen swasta'
                                                            },
                                                        ],
                                                        emphasis: {
                                                            itemStyle: {
                                                                shadowBlur: 10,
                                                                shadowOffsetX: 0,
                                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                            }
                                                        }
                                                    }]
                                                });
                                            });
                                        </script>
                                        <!-- End Pie Chart -->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        </section>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
@endsection
