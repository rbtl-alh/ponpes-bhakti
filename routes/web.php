<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/berita', function () {
    return view('berita.index');
});

Route::get('/daftarustadz', function () {
    return view('daftar.ustadz');
});

Route::get('/sejarah', function () {
    return view('sejarah.sejarah');
});
Route::get('/visi-misi', function () {
    return view('visimisi');
});
Route::get('/galeri', function () {
    return view('galeri.galeri');
});
// Route::get('/galeri', function () {
//     return view('galeri.galeri');
// });
Route::get('/datasantri', function () {
    return view('data.santri');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', function(){
        return view('admin.layout');
    });
    // Route::get('/galeri', [ImageController::class, 'index'])->name('admin.galeri');
    Route::resource('/galeri', KategoriController::class);    
    Route::post('/galeri', [ImageController::class, 'store'])->name('admin.galeri');
    Route::delete('/galeri/hapus/{id}', [ImageController::class, 'destroy']);
});

// Route::get('/admin/galeri', [ImageController::class, 'index'])->name('admin.galeri');
// Route::post('/admin/galeri', [ImageController::class, 'store'])->name('admin.galeri');
// Route::delete('/admin/galeri/{id}', [ImageController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
