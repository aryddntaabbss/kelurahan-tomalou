<?php

namespace App\Http\Controllers;

use App\Models\GambaranUmum;
use Illuminate\Http\Request;

class GambaranUmumController extends Controller
{
    public function index()
    {
        return view('dashboardd.pages.profilkelurahan.gambaranumum', [
            "data" => GambaranUmum::where('id', 1)->get()
        ]);
    }


    public function update(GambaranUmum $gambaranumum, Request $request)
    {
        $rules = $request->validate([
            'body' => ['required'],

        ]);
       
        $gambaranumum->where('id', $gambaranumum->id)->update($rules);

        return redirect()->route('gambaranumumadmin')->with('success', 'Data Berhasil Di Ubah');
    }
}
