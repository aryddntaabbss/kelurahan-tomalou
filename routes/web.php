<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\DatakelurahanController;
use App\Http\Controllers\SambutanLurahController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\KelembagaanController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\GambaranUmumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/link', function () {        
    $target = storage_path('app/public');
    $shortcut = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($target, $shortcut);
 });

Route::get('/',[BaseController::class,'home']);

Route::get('/peta-kelurahan', function () {
    return view ('pages.peta',[
        'title'=> 'Pemetaan Kelurahan Seli - Website Resmi Kelurahan Seli'
    ]);
})->name('peta.kelurahan');
// Route::get('/peta-jaringan', function () {
//     return view ('pages.peta_jaringan',[
//         'title'=> 'Pemetaan Jaringan Kelurahan Seli - Website Resmi Kelurahan Seli'
//     ]);
// })->name('peta.jaringan');

Route::get('/golongan-darah', [DatapendudukController::class, 'golongan'])->name('golongan');
Route::get('/informasi', [BaseController::class, 'informasi'])->name('informasi');
Route::get('/informasi/{posts:slug}/detail', [BaseController::class, 'detail_informasi'])->name('detail_informasi');

Route::prefix('profil')->group(function () {
  
    Route::get('/visi-misi',[BaseController::class,'visimisi'])->name('visimisi');

    // Route::get('/sejarah',[BaseController::class,'sejarah'])->name('sejarah');

    Route::get('/struktur-kelurahan',[BaseController::class,'perangkat'])->name('perangkat');
    Route::get('/gambaran-umum',[BaseController::class,'gambaranumum'])->name('gambaranumum');
});
Route::prefix('kelembagaan')->group(function () {
    
    Route::get('/pkk',[BaseController::class,'pkk'])->name('pkk');
    Route::get('/lembaga-permasyarakatan',[BaseController::class,'lpm'])->name('lpm');
});



// Data Kelurahan Route
Route::prefix('data-kelurahan')->group(function () {

    Route::get('/pekerjaan', [DatakelurahanController::class,'pekerjaan'])->name('pekerjaan');

    Route::get('/agama',[DatakelurahanController::class,'agama'])->name('agama');

    Route::get('/pendidikan', [DatakelurahanController::class,'pendidikan'])->name('pendidikan');

    Route::get('/jenis-kelamin', [DatakelurahanController::class,'jeniskelamin'])->name('jeniskelamin');

    Route::get('/kelompok-umur',[DatakelurahanController::class,'kelompokumur'])->name('kelompokumur');

    // Route::get('/pekerjaan', function () {
    //     return view('pages.datakelurahan.pekerjaan');
    // })->name('pekerjaan');

    // Route::get('/pekerjaan', function () {
    //     return view('pages.datakelurahan.pekerjaan');
    // })->name('pekerjaan');
});

// Dashboard Route
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [BaseController::class,'dashboard'])->name('dashboard');
    Route::get('/data-penduduk', [DatapendudukController::class, 'index'])->name('datapenduduk');
    Route::get('/data-penduduk/tambah', [DatapendudukController::class, 'tambah'])->name('tambah.datapenduduk');
    Route::post('/data-penduduk/tambah', [DatapendudukController::class, 'create'])->name('create.datapenduduk');
    Route::get('/data-penduduk/{datapenduduk:nik}/edit', [DatapendudukController::class, 'edit'])->name('edit.datapenduduk');
    Route::put('/data-penduduk/{datapenduduk}', [DatapendudukController::class, 'update'])->name('update.datapenduduk');
    Route::get('/data-penduduk/{datapenduduk}', [DatapendudukController::class, 'destroy'])->name('hapus.datapenduduk');
    // 
    Route::get('/sambutan-lurah', [SambutanLurahController::class, 'index'])->name('sambutanLurah');
    Route::get('/sambutan-lurah/{sambutanLurah}/edit', [SambutanLurahController::class, 'show'])->name('show.sambutanLurah');
    Route::put('/sambutan-lurah/{sambutanLurah}', [SambutanLurahController::class, 'update'])->name('update.sambutanLurah');
    // 
    Route::get('/informasi', [PostsController::class, 'index'])->name('posts');
    Route::get('/informasi/tambah', [PostsController::class, 'tambah'])->name('posts.tambah');
    Route::post('/informasi/create', [PostsController::class, 'create'])->name('posts.create');
    Route::get('/informasi/{posts:slug}/show', [PostsController::class, 'show'])->name('post.show');
    Route::get('/informasi/{posts:slug}/edit', [PostsController::class, 'edit'])->name('post.edit');
    Route::put('/informasi/{posts:slug}', [PostsController::class, 'update'])->name('post.update');
    Route::get('/informasi/{posts}', [PostsController::class, 'destroy'])->name('post.hapus');
    // 
    Route::get('/perangkat-kelurahan', [PerangkatController::class, 'index'])->name('perangkat.dashboard');
    Route::put('/perangkat-kelurahan/{perangkat}', [PerangkatController::class, 'update'])->name('perangkat.update');
    // 
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.dashboard');
    Route::put('/banner/{banner}', [BannerController::class, 'update'])->name('banner.update');
    // 
    Route::get('/visi-misi', [VisimisiController::class, 'index'])->name('visimisiadmin');
    Route::put('/visi-misi/{visimisi}', [VisimisiController::class, 'update'])->name('visimisi.update');
    // 
    Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarahadmin');
    Route::put('/sejarah/{sejarah}', [SejarahController::class, 'update'])->name('sejarah.update');
    // 
    Route::get('/gambaran-umum', [GambaranUmumController::class, 'index'])->name('gambaranumumadmin');
    Route::put('/gambaran-umum/{gambaranumum}', [GambaranUmumController::class, 'update'])->name('gambaranumum.update');
    // 
    Route::get('/pkk', [KelembagaanController::class, 'pkk'])->name('pkk.dashboard');
    Route::put('/pkk/{pkk}', [KelembagaanController::class, 'pkk_update'])->name('pkk.update');
    Route::get('/lpm', [KelembagaanController::class, 'lpm'])->name('lpm.dashboard');
    Route::put('/lpm/{lpm}', [KelembagaanController::class, 'lpm_update'])->name('lpm.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
