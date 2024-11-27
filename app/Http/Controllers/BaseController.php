<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Datapenduduk;
use App\Models\GambaranUmum;
use App\Models\Lpm;
use App\Models\PerangkatKelurahan;
use App\Models\Pkk;
use App\Models\Posts;
use App\Models\User;
use App\Models\SambutanLurah;
use App\Models\Sejarah;
use App\Models\Visimisi;

class BaseController extends Controller
{

    public function home()
    {
        return view('/pages/home', [
            "datapendudukL" => Datapenduduk::where('jenis_kelamin', 'LAKI-LAKI')->count(),
            "datapendudukP" => Datapenduduk::where('jenis_kelamin', 'PEREMPUAN')->count(),
            "data" => SambutanLurah::where('id', 1)->get(),
            "datapenduduk" => Datapenduduk::count(),
            "info" => Posts::latest()->get(),
            "posts" => Posts::latest()->paginate(6),
            "banner" => Banner::latest()->get(),
            'title' => 'Website Resmi Kelurahan Tomalou'
        ]);
    }

    public function dashboard()
    {
        return view('dashboardd.index', [
            "alluser" => User::all()->count(),
            "penduduk" => Datapenduduk::all()->count(),
            "posts" => Posts::count(),
        ]);
    }


    public function visimisi()
    {
        return view('pages.profil.visimisi', [
            'data' => Visimisi::get(),
            'title' => 'Visi dan Misi - Website Resmi Kelurahan Tomalou'
        ]);
    }

    public function sejarah()
    {
        return view('pages.profil.sejarah', [
            'data' => Sejarah::get(),
            'title' => 'Sejarah Kelurahan Seli - Website Resmi Kelurahan Tomalou'
        ]);
    }
    public function gambaranumum()
    {
        return view('pages.profil.gambaranumum', [
            'data' => GambaranUmum::get(),
            'title' => 'Gambaran Umum kelurahan Seli - Website Resmi Kelurahan Tomalou'
        ]);
    }

    public function perangkat()
    {
        return view('pages.profil.perangkat', [
            "perangkat" => PerangkatKelurahan::where('id', 1)->get(),
            'title' => 'Perangkat Kelurahan Seli - Website Resmi Kelurahan Tomalou'
        ]);
    }

    public function lpm()
    {
        return view('pages.kelembagaan.lpm', [
            "lpm" => Lpm::get(),
            'title' => 'Lembaga Pemberdayaan Masyarakat - Website Resmi Kelurahan Tomalou'
        ]);
    }

    public function pkk()
    {
        return view('pages.kelembagaan.pkk', [
            "pkk" => Pkk::get(),
            'title' => 'Pemberdayaan Kesejahteraan Keluarga - Website Resmi Kelurahan Tomalou'
        ]);
    }

    public function informasi()
    {
        return view('pages.informasi.informasi', [
            "posts" => Posts::latest()->paginate(10),
            "posts_new" => Posts::latest()->paginate(10),
            'title' => 'Informasi Seputar Kelurahan Seli - Website Resmi Kelurahan Tomalou'
        ]);
    }
    public function detail_informasi(Posts $posts)
    {
        return view('pages.informasi.detailInformasi', [
            'title' => $posts->judul . '- Website Resmi Kelurahan Tomalou',
            'posts' => $posts
        ]);
    }
}
