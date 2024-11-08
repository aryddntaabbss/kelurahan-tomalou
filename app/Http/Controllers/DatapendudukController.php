<?php

namespace App\Http\Controllers;

use App\Models\Datapenduduk;
use Illuminate\Http\Request;

class DatapendudukController extends Controller
{
    public function index(Request $request)
    {
        $data = Datapenduduk::query();

        // Pencarian data penduduk berdasarkan 'nik' atau 'nama'
        if ($request->filled('cari')) {
            $data->where('nik', $request->cari)
                ->orWhere('nama', 'like', '%' . $request->cari . '%');
        }

        return view('dashboardd.pages.datapenduduk.index', [
            'penduduk' => $data->get(), // Menggunakan get() untuk mengambil semua data tanpa paginasi
        ]);
    }


    public function tambah()
    {
        return view('dashboardd.pages.datapenduduk.tambah');
    }
    public function create(Request $request)
    {
        $rules = $request->validate([
            'rw' => ['required'],
            'rt' => ['required'],
            'alamat' => ['required'],
            'no_kk' => ['required', 'numeric'],
            'nama_kepala_keluarga' => ['required'],
            'nama' => ['required'],
            'nik' => ['required', 'numeric'],
            'jenis_kelamin' => ['required'],
            'hubungan' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'usia' => ['required', 'numeric'],
            'status' => ['required'],
            'agama' => ['required'],
            'golongan_darah' => ['required'],
            'kewarganegaraan' => ['required'],
            'suku' => ['required'],
            'pendidikan' => ['required'],
            'pekerjaan' => ['required'],
        ]);

        Datapenduduk::create($rules);
        return redirect()->route('datapenduduk')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edit(Datapenduduk $datapenduduk)
    {
        // dd($datapenduduk);
        return view('dashboardd.pages.datapenduduk.edit', compact('datapenduduk'));
    }

    public function update(Datapenduduk $datapenduduk, Request $request)
    {
        $rules = $request->validate([
            'rw' => ['required'],
            'rt' => ['required'],
            'alamat' => ['required'],
            'no_kk' => ['required', 'numeric'],
            'nama_kepala_keluarga' => ['required'],
            'nama' => ['required'],
            'nik' => ['required', 'numeric'],
            'jenis_kelamin' => ['required'],
            'hubungan' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'usia' => ['required', 'numeric'],
            'status' => ['required'],
            'agama' => ['required'],
            'golongan_darah' => ['required'],
            'kewarganegaraan' => ['required'],
            'suku' => ['required'],
            'pendidikan' => ['required'],
            'pekerjaan' => ['required'],
        ]);
        $datapenduduk->where('id', $datapenduduk->id)->update($rules);

        return redirect()->route('datapenduduk')->with('success', 'Data Berhasil Di Ubah');
    }

    // hapus data penduduk
    public function destroy(Datapenduduk $datapenduduk)
    {
        Datapenduduk::destroy($datapenduduk->id);
        return redirect()->route('datapenduduk')->with('success', 'Data Berhasil Di Hapus');
    }

    public function golongan(Request $request)
    {
        // Mulai query untuk mengambil data yang memiliki golongan darah yang diketahui
        $golongan = Datapenduduk::query()
            ->where('golongan_darah', '!=', 'Tidak Tahu'); // Menyaring data yang golongan darahnya tidak diketahui

        // Menambah filter hanya berdasarkan golongan darah jika ada input pencarian
        if ($request->filled('cari')) {
            $golongan->where('golongan_darah', $request->cari);
        }

        return view('pages.golonganDarah', [
            'golongan' => $golongan->get(), // Mengambil semua data yang sudah difilter tanpa paginasi
            'cari' => $request->cari,
            'title' => 'Pencarian Golongan Darah Kelurahan Seli - Website Resmi Kelurahan Seli',
        ]);
    }
}
