<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Ustadz;
use App\Models\Ustadzah;
use App\Models\Photo;
use App\Models\KategoriGaleri;
use App\Models\Image;
use App\Models\Post;
use App\Models\Program;
use App\Models\User;
use App\Models\File;
use App\Models\Deskripsi;
use App\Models\Visi;
use App\Models\Misi;

class UserViewController extends Controller
{    
    public function home(){
        return view('home',[
            'berita' => Post::latest()->paginate(3),
            'program' => Program::all(),
            'desk' => Deskripsi::all(),
            'siswa' => Siswa::where('jenis_kelamin', 'Laki-laki')->count(),
            'siswi' => Siswa::where('jenis_kelamin', 'Perempuan')->count(),
            'ustadz' => Ustadz::all()->count(),
            'ustadzah' => Ustadzah::all()->count(),
        ]);
    }
    public function dashboard(){
        return view('admin.dashboard',[            
            'siswa' => Siswa::count(),            
            'ustadz' => Ustadz::all()->count(),
            'ustadzah' => Ustadzah::all()->count(),
            'admin' => User::all()->count(),
        ]);
    }

    public function siswa(){
        return view('data-santri',[
            'siswa' => Siswa::all(),
        ]);
    }

    public function ustadz(){
        return view('daftar.ustadz',[
            'ustadz' => Ustadz::all(),
            'ustadzah' => Ustadzah::all(),
            'img' => Photo::all(),
        ]);
    } 

    public function kategori(){
        return view('galeri.galeri', [
            'kateogri' => KategoriGaleri::all(),
        ]);
    }

    public function galeri(KategoriGaleri $kategoriGaleri){
        return view('galeri.detail', [
            'img' => Image::where('kategori_id', $kategoriGaleri->id)->get(),
            'kategori' => $kategoriGaleri,
        ]);
    }

    public function galeriAll(){
        return view('galeri.all', [
            'img' => Image::all()
        ]);
    }

    public function kurikulum(){
        return view('kurikulum',[
            'file' => File::where('ket', 'kurikulum')->paginate(1),
        ]);
    }
    public function sistem(){
        return view('sistem-pengajar',[
            'file' => File::where('ket', 'sistem')->paginate(1),
        ]);
    }

    public function visimisi(){
        return view('visimisi',[
            'visi' => Visi::all(),
            'misi' => Misi::all(),
        ]);
    }

}
