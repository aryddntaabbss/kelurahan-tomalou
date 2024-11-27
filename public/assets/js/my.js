
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

var lc3 = L.icon( {
    iconUrl: './icon/landmark-flag-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6222069530334474, 127.40370896445833 ], {
    icon: lc3
} ).addTo( map ).bindPopup( "<b> FKNT </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc6 = L.icon( {
    iconUrl: './icon/house-laptop-solid.svg',
    iconSize: [ 30, 40 ],
} )
L.marker( [ 0.6224109322592779, 127.40425400880235 ], {
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
    iconSize: [ 25, ],
} )
L.marker( [ 0.6247436984923774, 127.40582475484308 ], {
    icon: lc8
} ).addTo( map ).bindPopup( "<b> MTs Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara" ).addTo( map );

var lc9 = L.icon( {
    iconUrl: './icon/futbol-solid.svg',
    iconSize: [ 30, 40 ],
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

//polyline
var batas_tomalou = [

    [ 0.660059, 127.402738 ],
    [ 0.6262162306932322, 127.3974625864109 ],
    [ 0.6236753324483093, 127.3967316402622 ],
    [ 0.623497, 127.397076 ],
    [ 0.6235020475824422, 127.3973188707473 ],
    [ 0.6234804739824865, 127.3976582800187 ],
    [ 0.6233838848180293, 127.3978559899735 ],
    [ 0.6231409055004888, 127.3980856441154 ],
    [ 0.6229584640390546, 127.3984354286694 ],
    [ 0.6229732985147254, 127.3984960611503 ],
    [ 0.6225061427029029, 127.3993472092668 ],
    [ 0.622528055877995, 127.3995281455841 ],
    [ 0.6224946062223921, 127.3996531917188 ],
    [ 0.6223789192824062, 127.3997925024844 ],
    [ 0.6222485885880147, 127.4003142307216 ],
    [ 0.6222300396219279, 127.400747938973 ],
    [ 0.6221844767663679, 127.4010626937352 ],
    [ 0.6221085111056915, 127.4014513351278 ],
    [ 0.6219241899726788, 127.401707666409 ],
    [ 0.6219145460835627, 127.4030320597159 ],
    [ 0.6219149734372869, 127.4040182009288 ],
    [ 0.6222106381097996, 127.4040663114855 ],
    [ 0.6221973200470466, 127.4042849778844 ],
    [ 0.6221523665911541, 127.4044291067611 ],
    [ 0.6221752964071995, 127.4045490098845 ],
    [ 0.6221685765436564, 127.4046067464172 ],
    [ 0.62209271233124, 127.4046212464573 ],
    [ 0.6219595422804637, 127.4056514684775 ],
    [ 0.6219999649000429, 127.4057977661352 ],
    [ 0.6224429626638563, 127.4061691050507 ],
    [ 0.6224664186557594, 127.4062974522508 ],
    [ 0.6225401730218076, 127.4064229619077 ],
    [ 0.6228629137100631, 127.4066669443373 ],
    [ 0.6228860236260013, 127.4072267591548 ],
    [ 0.6223340742993869, 127.4072183666666 ],
    [ 0.6223418417329351, 127.4073643771655 ],
    [ 0.6224997595715797, 127.407359398714 ],
    [ 0.6225187066357731, 127.4074681863063 ],
    [ 0.6226092102696941, 127.4074733245635 ],
    [ 0.6226218247529456, 127.4073318282359 ],
    [ 0.6228443771926349, 127.4073561280529 ],
    [ 0.622768058664476, 127.4082371907838 ],
    [ 0.6227130244966922, 127.4087004799442 ],
    [ 0.623881000270871, 127.4088904118094 ],
    [ 0.6243967379461095, 127.4089292685106 ],
    [ 0.660059, 127.402738 ],
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
