<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        return view('dashboardd.pages.profilkelurahan.visimisi', [
            "data" => Visimisi::where('id', 1)->get(),
           
        ]);
    }

 
    public function update(Visimisi $visimisi, Request $request)
    {
        $rules = $request->validate([
            'visi' => ['required'],
            'misi' => ['required'],

        ]);
       
        $visimisi->where('id', $visimisi->id)->update($rules);

        return redirect()->route('visimisiadmin')->with('success', 'Data Berhasil Di Ubah');
    }
}
