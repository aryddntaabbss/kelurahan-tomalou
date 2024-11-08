<?php

namespace App\Http\Controllers;

use App\Models\Lpm;
use App\Models\Pkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelembagaanController extends Controller
{
  
    public function pkk()
    {
        return view('dashboardd.pages.kelembagaan.pkk', [
            "pkk" => Pkk::where('id', 1)->get()
        ]);
    }
    
    public function pkk_update(Pkk $pkk, Request $request)
    {
        // dd($request);
        $rules = $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
            'body'=>['required']

        ]);

        if ($request->file('img')) {
            if ($request->img) {
                Storage::delete($request->oldimage);
            }
            $rules['img'] = $request->file('img')->store('images');
        }

       $pkk->where('id',$pkk->id)->update($rules);

        return redirect()->route('pkk.dashboard')->with('success', 'Data Berhasil Di Ubah');
    }

    public function lpm()
    {
        return view('dashboardd.pages.kelembagaan.lpm', [
            "pkk" => Lpm::where('id', 1)->get()
        ]);
    }
    
    public function lpm_update(Lpm $lpm, Request $request)
    {
        // dd($request);
        $rules = $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
            'body'=>['required']

        ]);

        if ($request->file('img')) {
            if ($request->img) {
                Storage::delete($request->oldimage);
            }
            $rules['img'] = $request->file('img')->store('images');
        }

       $lpm->where('id',$lpm->id)->update($rules);

        return redirect()->route('lpm.dashboard')->with('success', 'Data Berhasil Di Ubah');
    }
}
