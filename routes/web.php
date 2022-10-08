<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UstadzController;
use App\Http\Controllers\UstadzahController;
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
    Route::post('/galeri/upload', [ImageController::class, 'store'])->name('admin.galeri');
    Route::delete('/galeri/hapus/{id}', [ImageController::class, 'destroy']);
    
    Route::resource('/ustadz', UstadzController::class);    
    // Route::patch('/ustadz/{id}/edit', [UstadzController::class, 'update'])->name('ustadz.update');    
    Route::post('/ustadz/import', [UstadzController::class, 'import'])->name('ustadz.import');
    Route::get('/ustadz/export', [UstadzController::class, 'export'])->name('ustadz.export');
    Route::post('/fotoustadz', [UstadzController::class, 'uploadimage']);
    Route::delete('/imageusdtadz/{id}', [UstadzController::class, 'deleteimage']);

    Route::get('/ustadzah', [UstadzahController::class, 'index'])->name('ustadzah.index');  
    Route::get('/ustadzah/create', [UstadzahController::class, 'create'])->name('ustadzah.create');  
    Route::post('/ustadzah', [UstadzahController::class, 'store'])->name('ustadzah.store');  
    Route::get('/ustadzah/{id}', [UstadzahController::class, 'edit'])->name('ustadzah.edit');  
    Route::patch('/ustadzah/{id}/edit', [UstadzahController::class, 'update'])->name('ustadzah.update');  
    Route::delete('/ustadzah/{id}', [UstadzahController::class, 'destroy'])->name('ustadzah.destroy');  
    Route::post('/ustadzah/import', [UstadzahController::class, 'import'])->name('ustadzah.import');
    Route::get('/ustadzah/export', [UstadzahController::class, 'export'])->name('ustadzah.export'); 
    Route::post('/fotoustadzah', [UstadzahController::class, 'uploadimage']);
    Route::delete('/imageusdtadzah/{id}', [UstadzahController::class, 'deleteimage']); 
});

// Route::get('/admin/galeri', [ImageController::class, 'index'])->name('admin.galeri');
// Route::post('/admin/galeri', [ImageController::class, 'store'])->name('admin.galeri');
// Route::delete('/admin/galeri/{id}', [ImageController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
