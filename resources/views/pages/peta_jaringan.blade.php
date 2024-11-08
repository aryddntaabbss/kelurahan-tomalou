 @extends('layouts.main')

 @section('body')
     @include('layouts.header')
     {{-- @include('layouts.hero') --}}

     <main id="main">
         <section class="mt-5">
             <div class="container">
                 <div class="mt-5 section-title" data-aos="fade-up">
                     <h2>Pemetaan Jangkauan Jaringan Wifi Voucer Di Kelurahan Seli</h2>
                 </div>
                 <div id="map" style="height: 580px;" data-aos="fade-up"></div>
             </div>
         </section>
     </main>
     <!-- End #main -->
     @include('layouts.footer')

     <script>
         var peta1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
             attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
         });

         var peta2 = L.tileLayer(
             'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                     '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                     'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                 id: 'mapbox/satellite-v9'
             });


         var map = L.map('map', {
             center: [0.6391968705884246, 127.4337552206041],
             zoom: 16,
             layers: [peta1],
         });

         var baseLayers = {
             'Default': peta1,
             'Satelit': peta2,

         };

         L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
             maxZoom: 19,
             attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
         }).addTo(map);

         L.circle([0.6395600442762361, 127.43453983624998], {
             radius: 150,
             fillColor: 'red',
             color: 'red'
         }).addTo(map).bindPopup("VILDHA HOTSPOT <br> alamat : kel.seli, RT 004 <br> jangkauan : 150m");

         L.circle([0.6380382143099866, 127.43310772536353], {
             radius: 130,
             fillColor: 'blue',
             color: 'blue'
         }).addTo(map).bindPopup("ROSSEL HOTSPOT <br> alamat : kel.seli, RT 003 <br> jangkauan : 130m ");

         L.circle([0.6388816751625511, 127.43417366029014], {
             radius: 100,
             fillColor: 'green',
             color: 'green'
         }).addTo(map).bindPopup("ALDHY HOTSPOT <br> alamat : kel.seli, RT 004 <br> jangkauan : 100m");

         L.circle([0.6368408875153335, 127.43170816172817], {
             radius: 200,
             fillColor: 'yellow',
             color: 'yellow'
         }).addTo(map).bindPopup("Nama : DILAVIDA HOTSPOT <br> alamat : kel.seli, RT 001 <br> jangkauan : 200m ");

         //polyline

         //ttik 1
         var jalur1 = [
             [0.6559418230180674, 127.41003865733728],
             [0.6407895351482238, 127.4351842477246],
             [0.6405427016454935, 127.43496090822606],
             [0.639762282743613, 127.4357330613104],
             [0.6395906320682662, 127.43562577294776],
             [0.639397525051634, 127.43555067109394],
             [0.6392473307003464, 127.43548629807634],
             [0.6390756800077865, 127.4353575520412],
             [0.6388289321271785, 127.43518589066096],
             [0.6388396602811423, 127.43519661949406],
             [0.6386733736595974, 127.43500886485946],
             [0.6381369651626068, 127.43421493097733],
             [0.6380082271047434, 127.43404326960258],
             [0.6377507510016879, 127.43385015054987],
             [0.6375576439159361, 127.43360338731583],
             [0.6373162600485717, 127.43344781919],
             [0.637171429722741, 127.43338344617241],
             [0.6371016966014335, 127.4333137087367],
             [0.6370051430473047, 127.43322251362846],
             [0.6367744873202659, 127.43291137738203],
             [0.6366403851527499, 127.43277190251062],
             [0.6365384675031031, 127.4327021650749],
             [0.6360556996389002, 127.43233738465325],
             [0.6359752383275996, 127.43223546070874],
             [0.6358089516135897, 127.43213890118237],
             [0.6357070339475185, 127.43208525700106],
             [0.6353583682326006, 127.43206916374666],
             [0.6352242659943363, 127.43196187539745],
             [0.6349238770440468, 127.43179557843537],
             [0.634677128964667, 127.43172584099968],
             [0.6345483908316407, 127.4317151121634],
             [0.6343284631776014, 127.43179021401471],
             [0.6342640941071443, 127.43191896004988],
             [0.6341782686786344, 127.43200479074],
             [0.6341782686786344, 127.43200479074],
             [0.6338617873677344, 127.43219790979293],
             [0.6337545055735252, 127.43222473188357],
             [0.6336043110579047, 127.43223546071985],
             [0.6331805479367782, 127.43221400304732],
             [0.6326334106912, 127.43212280793908],
             [0.6323383856818793, 127.43201015515832],
             [0.6322525602214872, 127.4318867735413],
             [0.6321506424650882, 127.43162391706997],
             [0.6321130938249844, 127.43148444219852],
             [0.6321130938249844, 127.43122158571009],
             [0.632134550190798, 127.43104455991177],
             [0.6356131313274108, 127.42753797973836],
             [0.6389149837694724, 127.42326090624002],
             [0.6417768781721245, 127.41906681396347],
             [0.6441032814547653, 127.41692176811485],
             [0.646957661382378, 127.41535423473],
             [0.6489045784783591, 127.41479322272451],
             [0.6512474777188982, 127.41377020083212],
             [0.6529304047391509, 127.4127306786323],
             [0.6559418230180674, 127.41003865733728],




         ];

         L.polyline(jalur1, {
             color: 'red'
         }).addTo(map);

         var layerControl = L.control.layers(baseLayers).addTo(map);

         var map = L.map('map').setView([0.6391968705884246, 127.4337552206041], 16);

         var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
             maxZoom: 25,
             attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
         }).addTo(map);
     </script>
 @endsection
