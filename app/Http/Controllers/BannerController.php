<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\PerangkatKelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
  
    public function index()
    {
        return view('dashboardd.pages.banner', [
            "data" => Banner::limit(3)->get()
        ]);
    }
    
    // public function edit(Banner $banner)
    // {
    //     return view('dashboardd.pages.informasi.edit_informasi', [
    //         'posts' => $banner
    //     ]);
    // }

    public function update(Banner $banner, Request $request)
    {
        // dd($request);
        $rules = $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2064',
            'label' => 'required|max:100',
            'deskripsi' => 'max:100',

        ]);

        if ($request->file('img')) {
            if ($request->img) {
                Storage::delete($request->oldimage);
            }
            $rules['img'] = $request->file('img')->store('images_banner');
        }

       $banner->where('id',$banner->id)->update($rules);

        return redirect()->route('banner.dashboard')->with('success', 'Data Berhasil Di Ubah');
    }
}
