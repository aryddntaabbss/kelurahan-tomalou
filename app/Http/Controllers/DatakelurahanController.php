<?php

namespace App\Http\Controllers;

use App\Models\Datapenduduk;

use Illuminate\Http\Request;

class DatakelurahanController extends Controller
{
    public function pekerjaan()
    {
        return view('pages.datakelurahan.pekerjaan', [
            'title'=> 'Data Kelurahan Seli - Website Resmi Kelurahan Seli',
            "wiraswasta" => Datapenduduk::where('pekerjaan', 'Wiraswasta')->count(),
            "ibuRumahtangga" => Datapenduduk::where('pekerjaan', 'Ibu Rumah Tangga')->count(),
            "pelajar" => Datapenduduk::where('pekerjaan', 'Pelajar')->count(),
            "belumbekerja" => Datapenduduk::where('pekerjaan', 'Belum Bekerja')->count(),
            "karyawanhonorer" => Datapenduduk::where('pekerjaan', 'Karyawan Honorer')->count(),
            "pns" => Datapenduduk::where('pekerjaan', 'Pegawai Negeri Sipil')->count(),
            "karyawanswasta" => Datapenduduk::where('pekerjaan', 'Karyawan Perusahaan Swasta')->count(),
            "petani" => Datapenduduk::where('pekerjaan', 'Petani')->count(),
            "pensiunan" => Datapenduduk::where('pekerjaan', 'Purnawirawan/Pensiunan')->count(),
            "guruswasta" => Datapenduduk::where('pekerjaan', 'Guru swasta')->count(),
            "sopir" => Datapenduduk::where('pekerjaan', 'Sopir')->count(),
            "tukangbatu" => Datapenduduk::where('pekerjaan', 'Tukang Batu')->count(),
            "tukangkayu" => Datapenduduk::where('pekerjaan', 'Tukang Kayu')->count(),
            "tidakmempunyaipekerjaantetap" => Datapenduduk::where('pekerjaan', 'Tidak Mempunyai Pekerjaan Tetap')->count(),
            "montir" => Datapenduduk::where('pekerjaan', 'Montir')->count(),
            "POLRI" => Datapenduduk::where('pekerjaan', 'POLRI')->count(),
            "TNI" => Datapenduduk::where('pekerjaan', 'TNI')->count(),
            "pemilikwarung" => Datapenduduk::where('pekerjaan', 'Pemilik usaha warung, rumah makan dan restoran')->count(),
            "dosenswasta" => Datapenduduk::where('pekerjaan', 'Dosen swasta')->count(),
        ]);
    }

    public function agama()
    {


        return view('pages.datakelurahan.agama', [
            "islam" => Datapenduduk::where('agama', 'islam')->count(),
            "kristen" => Datapenduduk::where('agama', 'kristen')->count(),
            "katholik" => Datapenduduk::where('agama', 'katholik')->count(),
            "budha" => Datapenduduk::where('agama', 'budha')->count(),
            "hindu" => Datapenduduk::where('agama', 'hindu')->count(),
            "konghucu" => Datapenduduk::where('agama', 'khonghucu')->count(),
            "lainnya" => Datapenduduk::where('agama', 'lainnya')->count(),
            "belum" => Datapenduduk::where('agama', 'belum mengisi')->count(),
            'title'=> 'Data Kelurahan Seli - Website Resmi Kelurahan Seli',
        ]);
    }

    public function pendidikan()
    {
        return view('pages.datakelurahan.pendidikan',[ 
            'title'=> 'Data Kelurahan Seli - Website Resmi Kelurahan Seli',
            "tamat_sd"=>Datapenduduk::where('pendidikan', 'Tamat SD/sederajat')->count(),
            "sedang_sd"=>Datapenduduk::where('pendidikan', 'Sedang SD/sederajat')->count(),
            "tamat_slta"=>Datapenduduk::where('pendidikan', 'Tamat SLTA/sederajat')->count(),
            "sedang_slta"=>Datapenduduk::where('pendidikan', 'Sedang SLTA/sederajat')->count(),
            "tamat_s2"=>Datapenduduk::where('pendidikan', 'Tamat S-2/sederajat')->count(),
            "sedang_s2"=>Datapenduduk::where('pendidikan', 'Sedang S-2/sederajat')->count(),
            "tamat_s1"=>Datapenduduk::where('pendidikan', 'Tamat S-1/sederajat')->count(),
            "sedang_s1"=>Datapenduduk::where('pendidikan', 'Sedang S-1/sederajat')->count(),
            "sedang_sltp"=>Datapenduduk::where('pendidikan', 'Sedang SLTP/Sederajat')->count(),
            "tamat_sltp"=>Datapenduduk::where('pendidikan', 'Tamat SLTP/Sederajat')->count(),
            "tidak_sd"=>Datapenduduk::where('pendidikan', 'Tidak tamat SD/sederajat')->count(),
            "sedang_tk"=>Datapenduduk::where('pendidikan', 'Sedang TK/Kelompok Bermain')->count(),
            "tamat_d1"=>Datapenduduk::where('pendidikan', 'Tamat D-1/sederajat')->count(),
            "tamat_d2"=>Datapenduduk::where('pendidikan', 'Tamat D-2/sederajat')->count(),
            "tamat_d3"=>Datapenduduk::where('pendidikan', 'Tamat D-3/sederajat')->count(),
            "tamat_d4"=>Datapenduduk::where('pendidikan', 'Tamat D-4/sederajat')->count(),
            "belum_tk"=>Datapenduduk::where('pendidikan', 'Belum masuk TK/Kelompok Bermain')->count(),
            "tidak_sekolah"=>Datapenduduk::where('pendidikan', 'Tidak pernah sekolah')->count(),
            "sedang_slb"=>Datapenduduk::where('pendidikan', 'Sedang SLB B/sederajat')->count(),
            "tamat_slb"=>Datapenduduk::where('pendidikan', 'Tamat SLB B/sederajat')->count(),
        ]);
    }

    public function jeniskelamin()
    {
        return view('pages.datakelurahan.jeniskelamin', [
            'title'=> 'Data Kelurahan Seli - Website Resmi Kelurahan Seli',
            "laki" => Datapenduduk::where('jenis_kelamin', 'LAKI-LAKI')->count(),
            "perempuan" => Datapenduduk::where('jenis_kelamin', 'PEREMPUAN')->count(),
            "datapenduduk" => Datapenduduk::all()->count(),
        ]);
    }

    public function kelompokumur()
    {
        return view('pages.datakelurahan.kelompokumur',[
            'title'=> 'Data Kelurahan Seli - Website Resmi Kelurahan Seli',
            "balita" => Datapenduduk::where('usia', '>',0)->where('usia', '<',5)->count(),
            "kanak" => Datapenduduk::where('usia', '>',5)->where('usia', '<',11)->count(),
            "remaja" => Datapenduduk::where('usia', '>',12)->where('usia', '<',25)->count(),
            "dewasa" => Datapenduduk::where('usia', '>',26)->where('usia', '<',45)->count(),
            "lansia" => Datapenduduk::where('usia', '>',65)->count(),
        ]);
    }
}
