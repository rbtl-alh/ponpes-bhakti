<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Ustadz;
use App\Models\Ustadzah;
use App\Models\Photo;
use App\Models\KategoriGaleri;
use App\Models\Image;

class UserViewController extends Controller
{
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
}