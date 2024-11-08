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
          <h2>Data Pendidikan</h2>
        </div>
      
        <div class="row">
            @include('layouts.navside')
            <div class="col-lg-8">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Grafik Pendidikan</h5>

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
                                              value: {{ $tamat_sd }},
                                              name: 'Tamat SD/sederajat'
                                          },
                                          {
                                              value: {{ $sedang_sd }},
                                              name: 'Sedang SD/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_slta }},
                                              name: 'Tamat SLTA/sederajat'
                                          },
                                          {
                                              value: {{ $sedang_slta }},
                                              name: 'Sedang SLTA/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_s2 }},
                                              name: 'Tamat S-2/sederajat'
                                          },
                                          {
                                              value: {{ $sedang_s2 }},
                                              name: 'Sedang S-2/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_s1 }},
                                              name: 'Tamat S-1/sederajat'
                                          },
                                          {
                                              value: {{ $sedang_s1 }},
                                              name: 'Sedang S-1/sederajat'
                                          },
                                          {
                                              value: {{ $sedang_sltp }},
                                              name: 'Sedang SLTP/Sederajat'
                                          },
                                          {
                                              value: {{ $tamat_sltp }},
                                              name: 'Tamat SLTP/Sederajat'
                                          },
                                          {
                                              value: {{ $tidak_sd }},
                                              name: 'Tidak tamat SD/sederajat'
                                          },
                                          {
                                              value: {{ $sedang_tk }},
                                              name: 'Sedang TK/Kelompok Bermain'
                                          },
                                          {
                                              value: {{ $tamat_d1 }},
                                              name: 'Tamat D-1/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_d2 }},
                                              name: 'Tamat D-2/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_d3 }},
                                              name: 'Tamat D-3/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_d4 }},
                                              name: 'Tamat D-4/sederajat'
                                          },
                                          
                                          {
                                              value: {{ $belum_tk }},
                                              name: 'Belum masuk TK/Kelompok Bermain'
                                          },
                                          {
                                              value: {{ $tidak_sekolah }},
                                              name: 'Tidak pernah sekolah'
                                          },
                                          {
                                              value: {{ $sedang_slb }},
                                              name: 'Sedang SLB B/sederajat'
                                          },
                                          {
                                              value: {{ $tamat_slb }},
                                              name: 'Tamat SLB B/sederajat'
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