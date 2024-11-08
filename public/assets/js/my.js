
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
    center: [0.6379481964010342, 127.43276245809457],
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
L.marker([0.6359387151103604, 127.43180700057091], {
    icon: lc1
}).addTo(map).bindPopup("<b> Mushola An-Nisa & TPQ An-Nisa</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc2 = L.icon({
    iconUrl: './icon/masjid.png',
    iconSize: [30, 40],
})
L.marker([0.6373529246120612, 127.43260069076233], {
    icon: lc2
}).addTo(map).bindPopup("<b> Masjid Besar Seli</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc3 = L.icon({
    iconUrl: './icon/masjid.png',
    iconSize: [30, 40],
})
L.marker([0.6380853373519023, 127.43368460570585], {
    icon: lc3
}).addTo(map).bindPopup("<b> Mushola Al-Furqan</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc4 = L.icon({
    iconUrl: './icon/masjid.png',
    iconSize: [30, 40],
})
L.marker([0.6389027381818648, 127.43419785557376], {
    icon: lc4
}).addTo(map).bindPopup("<b> Mushola Al-Ikhlas</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc5 = L.icon({
    iconUrl: './icon/posyandu.png',
    iconSize: [30, 40],
})
L.marker([0.637253952433538, 127.43282322345681], {
    icon: lc5
}).addTo(map).bindPopup("<b> Posyandu</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc6 = L.icon({
    iconUrl: './icon/kantor.png',
    iconSize: [30, 40],
})
L.marker([0.6395216193917909, 127.43479330596155], {
    icon: lc6
}).addTo(map).bindPopup("<b> Kantor Lurah Seli</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc7 = L.icon({
    iconUrl: './icon/polkesdes.png',
    iconSize: [30, 40],
})
L.marker([0.6396476753587413, 127.43464980778863], {
    icon: lc7
}).addTo(map).bindPopup("<b> Polkesdes</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc8 = L.icon({
    iconUrl: './icon/TK.png',
    iconSize: [25, ],
})
L.marker([0.6389284097763384, 127.43291559646235], {
    icon: lc8
}).addTo(map).bindPopup("<b> TK Aisyiyah Bustanul Athfal</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc9 = L.icon({
    iconUrl: './icon/lapangan.png',
    iconSize: [30, 40],
})
L.marker([0.6399289773731753, 127.43507932288153], {
    icon: lc9
}).addTo(map).bindPopup("<b> Lapangan Seli</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc10 = L.icon({
    iconUrl: './icon/sekolah.png',
    iconSize: [30, 40],
})
L.marker([0.6400861891914862, 127.43442718444406], {
    icon: lc10
}).addTo(map).bindPopup("<b> MTS SELI</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

var lc11 = L.icon({
    iconUrl: './icon/sekolah.png',
    iconSize: [30, 40],
})
L.marker([0.6404415287232597, 127.4348563441972], {
    icon: lc11
}).addTo(map).bindPopup("<b> MIN 1 SELI</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);

L.marker([0.637162, 127.431298], {
}).addTo(map).bindPopup("<b> Sanggar Eli Marasai</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);


var lc14 = L.icon({
    iconUrl: './icon/ngofagura.png',
    iconSize: [40, 50],
})
L.marker([0.6397073491451877, 127.43550243807834], {
}).addTo(map).bindPopup("<b> Bengkel HI2</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);
    

L.marker([0.6362131548321612, 127.43245072679024], {
}).addTo(map).bindPopup("<b> Taman Seli</b><br>" +
    "Jl. Raya Seli, Seli, Tidore, Kota Tidore Kepulauan, Maluku Utara").addTo(map);





//polyline
var batas_seli = [
    [0.6559812375019414, 127.41002915264366],
    [0.652998814257822, 127.41273282474019],
    [0.6508960996128115, 127.41393445409196],
    [0.6489006632969716, 127.41481421883319],
    [0.6466906644995248, 127.41560815047194],
    [0.6443090112966147, 127.41691706965933],
    [0.6418200979264185, 127.41897692049275],
    [0.6359410395011439, 127.4271738383006],
    [0.6321459503666869, 127.43100939531712],
    [0.6321244948004938, 127.43159411796016],
    [0.6323122365584344, 127.43198571979296],
    [0.6326877243269391, 127.43214665309887],
    [0.6337337225930452, 127.4322324840174],
    [0.6342218550025893, 127.43201790708964],
    [0.6343345008675498, 127.43176577881046],
    [0.6346670747467029, 127.4317067698996],
    [0.635364403273933, 127.43206082019123],
    [0.635734526521568, 127.43207154965194],
    [0.6364264927356371, 127.43261335528067],
    [0.6367429752659887, 127.4328547554506],
    [0.6370594539033991, 127.43328390723057],
    [0.6375851371969277, 127.43363259617868],
    [0.6381108148798849, 127.43417439997855],
    [0.6384970314493813, 127.43472157331966],
    [0.6388456944931282, 127.43521509802974],
    [0.6393552832864791, 127.43553696386633],
    [0.639757591248557, 127.43575154172753],
    [0.6405407469307469, 127.43495224268446],
    [0.6407606751417696, 127.43518291350006],
    [0.6559812375019414, 127.41002915264366],
];
L.polyline(batas_seli, {
    color: 'red'
}).addTo(map);

var batas_RT01 = [
    [0.639897192489887, 127.42904142123223],
    [0.6391220448195741, 127.42957401336926],
    [0.6387481420576728, 127.42960673634016],
    [0.6382402195284854, 127.43018702010339],
    [0.6372504510282576, 127.4320168931152],
    [0.6370774477625348, 127.4326865530009],
    [0.6368467786453189, 127.43299353687613],
];
L.polyline(batas_RT01, {
    color: 'blue'
}).addTo(map);

var batas_RT02 = [
    [0.6405596753542633, 127.43040522755837],
    [0.6397064720072245, 127.43098449997468],
    [0.6392416983005842, 127.43152388852185],
    [0.639054515194737, 127.43132625117407],
    [0.6384739570152349, 127.4321307508226],
    [0.6378569488852489, 127.43315673013406],
    [0.6378988857128304, 127.43322114085984],
    [0.6375530623839976, 127.43361001215352],
];
L.polyline(batas_RT02, {
    color: 'blue'
}).addTo(map);

var batas_RT03 = [
    [0.6413501174433845, 127.43200969700392],
    [0.6400058805812904, 127.4331570002829],
    [0.639487900792424, 127.4334422197372],
    [0.6393728084084235, 127.43345575845544],
    [0.6390899142752772, 127.43366501194278],
    [0.6391242208973449, 127.43371644363144],
    [0.6386276035312201, 127.434102402754],
    [0.6386387803728619, 127.43420062972551],
    [0.6383260435314276, 127.43450284581861],
];
L.polyline(batas_RT03, {
    color: 'blue'
}).addTo(map);

var layerControl = L.control.layers(baseLayers).addTo(map);

var map = L.map('map').setView([0.6391968705884246, 127.4337552206041], 16);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 25,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
