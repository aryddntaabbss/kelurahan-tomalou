<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('cari')){

            $data = Posts::where('judul','like','%'. $request->cari .'%')->paginate(5);
        }else{
            $data = Posts::paginate(10);
        }
        return view('dashboardd.pages.informasi.informasi', [
            'posts' => $data
        ]);
    }
    public function tambah()
    {
        return view('dashboardd.pages.informasi.tambah_informasi');
    }
    public function create(Request $request)
    {
        $rules = $request->validate([
            'judul'=>['required'],
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'body'=>['required']
        ]);
        
        if ($request->file('img')) {
            $rules['img'] = $request->file('img')->store('informasiGambar');
        }
        $rules['slug'] = Str::slug($request->judul, '-');
        $rules['excerp']= Str::limit(strip_tags($request->body),200);

        

        Posts::create($rules);
        return redirect()->route('posts')->with('success','Data Berhasil Di Tambahkan');
    }
    public function show(Posts $posts)
    {
        return view('dashboardd.pages.informasi.show_informasi', [
            'posts' => $posts,
        ]);
    }

    public function edit(Posts $posts)
    {
        return view('dashboardd.pages.informasi.edit_informasi', [
            'posts' => $posts
        ]);
    }
    public function update(Request $request, Posts $posts)
    {
        $rules = $request->validate([
            'judul'=>['required','max:150'],
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
            'body'=>['required']
        ]);

        if ($request->file('img')) {
            if ($request->img) {
                Storage::delete($request->oldimage);
            }
            
            $rules['img'] = $request->file('img')->store('informasiGambar');
        }

        $rules['slug'] = Str::slug($request->judul, '-');
        $rules['excerp']= Str::limit(strip_tags($request->body),200);

       

        $posts->where('id', $posts->id)->update($rules);
        return redirect()->route('posts')->with('success','Data Berhasil Di Ubah');
    }

    // hapus data 
    public function destroy(Posts $posts)
    {
        if ($posts->img) {
            Storage::delete($posts->img);
        }
        Posts::destroy($posts->id);
        return redirect()->route('posts')->with('success','Data Berhasil Di Hapus');
    }
  

}
