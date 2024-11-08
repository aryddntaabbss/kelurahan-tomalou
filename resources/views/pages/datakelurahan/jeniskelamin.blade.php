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
                            <h2>Data Jenis Kelamin</h2>
                        </div>
                        <div class="row">
                            @include('layouts.navside')
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Grafik Jenis Kelamin</h5>

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
                                                    legend: {
                                                        orient: 'vertical',
                                                        left: 'left'
                                                    },
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
                                                                value: {{ $laki }},
                                                                name: 'LAKI-LAKI'
                                                            },
                                                            {
                                                                value: {{ $perempuan }},
                                                                name: 'PEREMPUAN'
                                                            }
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
                            {{-- <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Bar Chart</h5>

                                        <!-- Bar Chart -->
                                        <div id="barChart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new ApexCharts(document.querySelector("#barChart"), {
                                                    series: [{
                                                        data: [{{ $laki }}, {{ $perempuan }}, {{ $datapenduduk }}]
                                                    }],
                                                    chart: {
                                                        type: 'bar',
                                                        height: 300
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            borderRadius: 4,
                                                            horizontal: true,
                                                        }
                                                    },
                                                    dataLabels: {
                                                        enabled: true
                                                    },
                                                    xaxis: {
                                                        categories: ['Laki-Laki', 'Perempuan', 'Total'],
                                                    },

                                                }).render();
                                            });
                                        </script>
                                        <!-- End Bar Chart -->

                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>

                </section>

            </div>
        </section>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
@endsection
