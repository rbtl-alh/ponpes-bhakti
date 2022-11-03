<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UstadzController;
use App\Http\Controllers\UstadzahController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DependantDropdownController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserViewController;
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
//     return view('home');
// });

Route::get('/berita', [PostController::class, 'index']);
Route::get('/berita/{post:slug}', [PostController::class, 'show']);

Route::get('/kurikulum', [UserViewController::class, 'kurikulum']);
Route::get('/sistem-pengajar', [UserViewController::class, 'sistem']);
Route::get('/visi-misi', [UserViewController::class, 'visimisi']);

Route::get('/sejarah', function () {
    return view('sejarah.sejarah');
});
// Route::get('/visi-misi', function () {
//     return view('visimisi');
// });

Route::get('/', [UserViewController::class, 'home']);
Route::get('/data-santri', [UserViewController::class, 'siswa']);
Route::get('/data-ustadz', [UserViewController::class, 'ustadz']);
Route::get('/galeri', [UserViewController::class, 'kategori']);
Route::get('/galeri/all', [UserViewController::class, 'galeriAll']);
Route::get('/galeri/{kategoriGaleri:nama_kategori}', [UserViewController::class, 'galeri']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [UserViewController::class, 'dashboard']);

    Route::resource('/galeri', KategoriController::class);    
    Route::post('/galeri/upload', [ImageController::class, 'store'])->name('admin.galeri');
    Route::delete('/galeri/hapus/{id}', [ImageController::class, 'destroy']);
    
    Route::get('/ustadz/export', [UstadzController::class, 'export'])->name('ustadz.export');
    Route::resource('/ustadz', UstadzController::class);            
    Route::post('/ustadz/import', [UstadzController::class, 'import'])->name('ustadz.import');
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

    Route::get('/berita/create', [AdminPostController::class, 'create'])->name('berita.create');
    Route::get('/berita/{post:slug}', [AdminPostController::class, 'show']);
    Route::get('/berita/{post:slug}/edit', [AdminPostController::class, 'edit']);
    Route::put('/berita/{post:slug}', [AdminPostController::class, 'update']);
    Route::delete('/berita/{post:id}', [AdminPostController::class, 'destroy']);
    Route::resource('/berita', AdminPostController::class);    
    Route::get('/checkSlug', [AdminPostController::class, 'checkSlug']);

    Route::get('/siswa/export', [SiswaController::class, 'export'])->name('siswa.export');
    Route::post('/siswa/import', [SiswaController::class, 'import'])->name('siswa.import');
    Route::resource('/siswa', SiswaController::class);
    
    Route::resource('/data-admin', AdminController::class);
    Route::resource('/program', ProgramController::class);

    Route::get('/kurikulum', [FileController::class, 'kurikulum']);
    Route::get('/sistem-pengajar', [FileController::class, 'sistem']);
    Route::post('/upload-pdf', [FileController::class, 'store'])->name('file.upload');
    Route::delete('/upload-pdf/{id}', [FileController::class, 'destroy'])->name('file.destroy');

    Route::get('/deskripsi', [ProfilController::class, 'desk'])->name('profil.deskripsi');
    Route::get('/deskripsi/{deskripsi:id}/edit', [ProfilController::class, 'editDesk']);
    Route::put('/deksripsi/{id}', [ProfilController::class, 'updateDesk'])->name('desk.update');
    Route::get('/visimisi', [ProfilController::class, 'visi'])->name('profil.visimisi');
    Route::get('/visi/{visi:id}/edit', [ProfilController::class, 'editVisi']);
    Route::put('/visi/{id}', [ProfilController::class, 'updateVisi'])->name('visi.update');
    Route::get('/misi/{misi:id}/edit', [ProfilController::class, 'editMisi']);
    Route::put('/misi/{id}', [ProfilController::class, 'updateMisi'])->name('misi.update');
    Route::get('/misi/create', [ProfilController::class, 'createMisi'])->name('misi.create');
    Route::post('/misi', [ProfilController::class, 'storeMisi'])->name('misi.store');  
    Route::delete('/misi/{id}', [ProfilController::class, 'destroyMisi'])->name('misi.destroy');  
});


Route::get('/coba', function(){
    return view('admin.siswa.coba');
});
Route::get('provinces', [DependantDropdownController::class,'provinces'])->name('provinces');
Route::get('cities', [DependantDropdownController::class,'cities'])->name('cities');
Route::get('districts', [DependantDropdownController::class,'districts'])->name('districts');
Route::get('villages', [DependantDropdownController::class,'villages'])->name('villages');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
