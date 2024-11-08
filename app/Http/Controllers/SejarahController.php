<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        return view('dashboardd.pages.profilkelurahan.sejarah', [
            "data" => Sejarah::where('id', 1)->get()
        ]);
    }


    public function update(Sejarah $sejarah, Request $request)
    {
        $rules = $request->validate([
            'body' => ['required'],

        ]);
       
        $sejarah->where('id', $sejarah->id)->update($rules);

        return redirect()->route('sejarahadmin')->with('success', 'Data Berhasil Di Ubah');
    }
}
