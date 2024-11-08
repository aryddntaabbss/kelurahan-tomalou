<?php

namespace App\Http\Controllers;

use App\Models\SambutanLurah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SambutanLurahController extends Controller
{
    public function index()
    {
        return view('dashboardd.pages.sambutan.sambutanLurah', [
            "data" => SambutanLurah::where('id', 1)->get()
        ]);
    }

    public function show(SambutanLurah $sambutanLurah)
    {
        // dd($sambutanLurah);
        // $rules = $request->validate([
        //     'nama_lurah' => ['required'],
        //     // 'img' => ['required','img'],
        //     'body' => ['required'],

        // ]);

        // $sambutanLurah->where('id', $sambutanLurah->id)->update([
        //     "nama_lurah"=>$request->nama_lurah,
        //     "body"=>$request->body,
        // ]);

        // return redirect()->back()->with('success', 'Data Berhasil Di Ubah');

        return view('dashboardd.pages.sambutan.editSambutanLurah', compact('sambutanLurah'));
    }

    public function update(SambutanLurah $sambutanLurah, Request $request)
    {
        $rules = $request->validate([
            'nama_lurah' => ['required'],
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
            'body' => ['required'],

        ]);
        if ($request->file('img')) {
            if ($request->img) {
                Storage::delete($request->oldimage);
            }
            $rules['img'] = $request->file('img')->store('images');
        }

        $sambutanLurah->where('id', $sambutanLurah->id)->update($rules);

        return redirect()->route('sambutanLurah')->with('success', 'Data Berhasil Di Ubah');
    }
}
