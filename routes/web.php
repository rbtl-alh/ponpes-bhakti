<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UstadzController;
use App\Http\Controllers\UstadzahController;

// use App\Models\Category;
use Illuminate\Support\Facades\Route;
// use PhpOffice\PhpSpreadsheet\Calculation\Category;

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

// Route::get('/kategori-berita', [PostCategoryController::class, 'index']);
// Route::get('/kategori-berita/{category:slug}', [PostCategoryController::class, 'show']);
// Route::get('/kategori-berita/{category:slug}', function(PostCategory $category){
//     return view('berita.index',[
//         'title' => $category->nama,
//         'posts' => $category->posts,
//         'category' => $category->nama
//     ]);
// });

Route::get('/berita', [PostController::class, 'index']);
Route::get('/berita/{post:slug}', [PostController::class, 'show']);

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
    
    Route::get('/ustadz/export', [UstadzController::class, 'export'])->name('ustadz.export');
    Route::resource('/ustadz', UstadzController::class);    
    // Route::patch('/ustadz/{id}/edit', [UstadzController::class, 'update'])->name('ustadz.update');    
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
});

// Route::get('/admin/galeri', [ImageController::class, 'index'])->name('admin.galeri');
// Route::post('/admin/galeri', [ImageController::class, 'store'])->name('admin.galeri');
// Route::delete('/admin/galeri/{id}', [ImageController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
