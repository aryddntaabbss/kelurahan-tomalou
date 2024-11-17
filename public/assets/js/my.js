
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
    center: [0.6231582842470047, 127.40284978058301],
    zoom: 17,
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

var lc1 = L.icon({
    iconUrl: './icon/masjid.png',
    iconSize: [30, 40],
})
L.marker([0.6222759385134449, 127.40352027793243], {
    icon: lc1
}).addTo(map).bindPopup("<b> Masjid Nurul Bahar</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc2 = L.icon({
    iconUrl: './icon/masjid.png',
    iconSize: [30, 40],
})
L.marker([0.6233119317340542, 127.40756905696031], {
    icon: lc2
}).addTo(map).bindPopup("<b> Masjid Darussalam</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc3 = L.icon({
    iconUrl: './icon/masjid.png',
    iconSize: [30, 40],
})
L.marker([0.6246896117786915, 127.39681555812109], {
    icon: lc3
}).addTo(map).bindPopup("<b> Masjid Besar Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

// var lc4 = L.icon({
//     iconUrl: './icon/masjid.png',
//     iconSize: [30, 40],
// })
// L.marker([0.6389027381818648, 127.43419785557376], {
//     icon: lc4
// }).addTo(map).bindPopup("<b> Mushola Al-Ikhlas</b><br>" +
//     "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

// var lc5 = L.icon({
//     iconUrl: './icon/posyandu.png',
//     iconSize: [30, 40],
// })
// L.marker([0.637253952433538, 127.43282322345681], {
//     icon: lc5
// }).addTo(map).bindPopup("<b> Posyandu</b><br>" +
//     "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc6 = L.icon({
    iconUrl: './icon/kantor.png',
    iconSize: [30, 40],
})
L.marker([0.6224109322592779, 127.40425400880235], {
    icon: lc6
}).addTo(map).bindPopup("<b> Kantor Lurah Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc7 = L.icon({
    iconUrl: './icon/polkesdes.png',
    iconSize: [30, 40],
})
L.marker([0.6234952470688616, 127.39874370543703], {
    icon: lc7
}).addTo(map).bindPopup("<b> Puskesmas Tomalou </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc8 = L.icon({
    iconUrl: './icon/sekolah.png',
    iconSize: [25, ],
})
L.marker([0.6247436984923774, 127.40582475484308], {
    icon: lc8
}).addTo(map).bindPopup("<b> MTs Tomalou</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc9 = L.icon({
    iconUrl: './icon/lapangan.png',
    iconSize: [30, 40],
})
L.marker([0.623745530242941, 127.39901496951565], {
    icon: lc9
}).addTo(map).bindPopup("<b> Stadion Grecele </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc10 = L.icon({
    iconUrl: './icon/sekolah.png',
    iconSize: [30, 40],
})
L.marker([0.6241074853517081, 127.3997121434504], {
    icon: lc10
}).addTo(map).bindPopup("<b>TK Pembina 9 Tidore Kepulauan</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc11 = L.icon({
    iconUrl: './icon/sekolah.png',
    iconSize: [30, 40],
})
L.marker([0.6250971616572779, 127.39783459713983], {
    icon: lc11
}).addTo(map).bindPopup("<b>SMPN 3 Tidore Kepulauan</b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);


var lc14 = L.icon({
    iconUrl: './icon/sekolah.png',
    iconSize: [30, 40],
})
L.marker([0.6259357474861693, 127.39697752647083], {
    icon: lc14
}).addTo(map).bindPopup("<b> SMKN 2 Tidore Kepulauan </b><br>" +
    "Tomalou, Tidore Selatan, Kota Tidore Kepulauan, Maluku Utara").addTo(map);




//polyline
var batas_tomalou = [
    [0.6225812942083822 , 127.4094108898464 ],
    [0.6231037795519817 , 127.4094765810955 ],
    [0.6365173045242508 , 127.4070810131274 ],
    [0.6371229699784573 , 127.3971183446679 ],
    [0.6248436897773102 , 127.3945957186075 ],
    [0.6241239071791291 , 127.3944666165787 ],
    [0.6237854034600686 , 127.3951528094753 ],
    [0.6234269398591995 , 127.3977435139597 ],
    [0.6221594312450419 , 127.400090386906 ],
    [0.6218118871455125 , 127.4024900985665 ],
    [0.6219059334524856 , 127.4040668143016 ],
    [0.6221639609929737 , 127.4044245481791 ],
    [0.6219275473658825 , 127.4058306047337 ],
    [0.6229003073554876 , 127.4068112182403 ],
    [0.6227398032431336 , 127.4086112242956 ],
    [0.6225812942083822 , 127.4094108898464 ],

];
L.polyline(batas_tomalou, {
    color: 'red'
}).addTo(map);

//batas rt
// var batas_RT01 = [
//     [0.639897192489887, 127.42904142123223],
//     [0.6391220448195741, 127.42957401336926],
//     [0.6387481420576728, 127.42960673634016],
//     [0.6382402195284854, 127.43018702010339],
//     [0.6372504510282576, 127.4320168931152],
//     [0.6370774477625348, 127.4326865530009],
//     [0.6368467786453189, 127.43299353687613],
// ];
// L.polyline(batas_RT01, {
//     color: 'blue'
// }).addTo(map);

// var batas_RT02 = [
//     [0.6405596753542633, 127.43040522755837],
//     [0.6397064720072245, 127.43098449997468],
//     [0.6392416983005842, 127.43152388852185],
//     [0.639054515194737, 127.43132625117407],
//     [0.6384739570152349, 127.4321307508226],
//     [0.6378569488852489, 127.43315673013406],
//     [0.6378988857128304, 127.43322114085984],
//     [0.6375530623839976, 127.43361001215352],
// ];
// L.polyline(batas_RT02, {
//     color: 'blue'
// }).addTo(map);

// var batas_RT03 = [
//     [0.6413501174433845, 127.43200969700392],
//     [0.6400058805812904, 127.4331570002829],
//     [0.639487900792424, 127.4334422197372],
//     [0.6393728084084235, 127.43345575845544],
//     [0.6390899142752772, 127.43366501194278],
//     [0.6391242208973449, 127.43371644363144],
//     [0.6386276035312201, 127.434102402754],
//     [0.6386387803728619, 127.43420062972551],
//     [0.6383260435314276, 127.43450284581861],
// ];
// L.polyline(batas_RT03, {
//     color: 'blue'
// }).addTo(map);

var layerControl = L.control.layers(baseLayers).addTo(map);

var map = L.map('map').setView([0.6391968705884246, 127.4337552206041], 16);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 25,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
