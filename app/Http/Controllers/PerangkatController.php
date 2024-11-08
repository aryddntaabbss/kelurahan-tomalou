<?php

namespace App\Http\Controllers;

use App\Models\PerangkatKelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerangkatController extends Controller
{
  
    public function index()
    {
        return view('dashboardd.pages.perangkatkelurahan.perangkatkelurahan', [
            "data" => PerangkatKelurahan::where('id', 1)->get()
        ]);
    }
    
    public function update(PerangkatKelurahan $perangkat, Request $request)
    {
        // dd($request);
        $rules = $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            

        ]);

        if ($request->file('img')) {
            if ($request->img) {
                Storage::delete($request->oldimage);
            }
            $rules['img'] = $request->file('img')->store('images');
        }

       $perangkat->where('id',$perangkat->id)->update($rules);

        return redirect()->route('perangkat.dashboard')->with('success', 'Data Berhasil Di Ubah');
    }
}
