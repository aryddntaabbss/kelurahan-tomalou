
var peta1 = L.tileLayer( 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
} );

var peta2 = L.tileLayer(
    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/satellite-v9'
} );


var map = L.map( 'map', {
    center: [ 0.6231582842470047, 127.40284978058301 ],
    zoom: 17,
    layers: [ peta1 ],
} );

var baseLayers = {
    'Default': peta1,
    'Satelit': peta2,

};

L.tileLayer( 'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 15,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
} ).addTo( map );


var lc3 = L.icon( {
    iconUrl: './icon/landmark-flag-solid.svg',
    iconSize: [ 25, 40 ],
} )
L.marker( [ 0.6222069530334474, 127.40370896445833 ], {
    icon: lc3
} ).addTo( map ).bindPopup( "<b> FKNT </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );


var lc1 = L.icon( {
    iconUrl: './icon/mosque-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6222759385134449, 127.40352027793243 ], {
    icon: lc1
} ).addTo( map ).bindPopup( "<b> Masjid Nurul Bahar</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc2 = L.icon( {
    iconUrl: './icon/mosque-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6233119317340542, 127.40756905696031 ], {
    icon: lc2
} ).addTo( map ).bindPopup( "<b> Masjid Darussalam</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc3 = L.icon( {
    iconUrl: './icon/mosque-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6246896117786915, 127.39681555812109 ], {
    icon: lc3
} ).addTo( map ).bindPopup( "<b> Masjid Besar Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc6 = L.icon( {
    iconUrl: './icon/building-flag-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6236322058834084, 127.39843639628964 ], {
    icon: lc6
} ).addTo( map ).bindPopup( "<b> Kantor Lurah Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc7 = L.icon( {
    iconUrl: './icon/house-medical-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6234952470688616, 127.39874370543703 ], {
    icon: lc7
} ).addTo( map ).bindPopup( "<b> Puskesmas Tomalou </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc8 = L.icon( {
    iconUrl: './icon/school-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6247436984923774, 127.40582475484308 ], {
    icon: lc8
} ).addTo( map ).bindPopup( "<b> MTs Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc9 = L.icon( {
    iconUrl: './icon/futbol-solid.svg',
    iconSize: [ 25, 40 ],
} )
L.marker( [ 0.623745530242941, 127.39901496951565 ], {
    icon: lc9
} ).addTo( map ).bindPopup( "<b> Stadion Grecele </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc10 = L.icon( {
    iconUrl: './icon/school-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6241074853517081, 127.3997121434504 ], {
    icon: lc10
} ).addTo( map ).bindPopup( "<b>TK Pembina 9 Tidore Kepulauan</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc11 = L.icon( {
    iconUrl: './icon/school-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6250971616572779, 127.39783459713983 ], {
    icon: lc11
} ).addTo( map ).bindPopup( "<b>SMPN 3 Tidore Kepulauan</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );


var lc14 = L.icon( {
    iconUrl: './icon/school-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6259357474861693, 127.39697752647083 ], {
    icon: lc14
} ).addTo( map ).bindPopup( "<b> SMKN 2 Tidore Kepulauan </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc14 = L.icon( {
    iconUrl: './icon/credit-card-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.623388, 127.407394 ], {
    icon: lc14
} ).addTo( map ).bindPopup( "<b> Bank BRI UNIT Tidore Selatan </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

//polyline
var batas_tomalou = [
    [ 0.6225812942083822, 127.4094108898464 ],
    [ 0.6231037795519817, 127.4094765810955 ],
    [ 0.663483736275566, 127.4018500073157 ],
    [ 0.6371229699784573, 127.3971183446679 ],
    [ 0.6248436897773102, 127.3945957186075 ],
    [ 0.6241239071791291, 127.3944666165787 ],
    [ 0.6237854034600686, 127.3951528094753 ],
    [ 0.6234269398591995, 127.3977435139597 ],
    [ 0.6221594312450419, 127.400090386906 ],
    [ 0.6218118871455125, 127.4024900985665 ],
    [ 0.6219059334524856, 127.4040668143016 ],
    [ 0.6221639609929737, 127.4044245481791 ],
    [ 0.6219275473658825, 127.4058306047337 ],
    [ 0.6229003073554876, 127.4068112182403 ],
    [ 0.6227398032431336, 127.4086112242956 ],
    [ 0.6225812942083822, 127.4094108898464 ]
];
L.polygon( batas_tomalou, {
    color: 'red',
    fillColor: 'red',
    fillOpacity: 0.1,
    weight: 2
} ).addTo( map );

var layerControl = L.control.layers( baseLayers ).addTo( map );

var map = L.map( 'map' ).setView( [ 0.6391968705884246, 127.4337552206041 ], 16 );

var tiles = L.tileLayer( 'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 25,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
} ).addTo( map );
