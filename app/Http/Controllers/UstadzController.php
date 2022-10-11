<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UstadzImport;
use App\Exports\UstadzExport;
use Maatwebsite\Excel\Facades\Excel; 
use App\Models\Ustadz;
use App\Models\Image;
use App\Models\Photo;
use App\Models\Ustadzah;
use Illuminate\Support\Facades\Storage;

class UstadzController extends Controller
{
    public function index(){
        //mengambil data user
        $data = Ustadz::all();
        //menampilkan halaman user dan mengirim variabel data berisi data user
        return view('admin.ustadz.index', ['data' => $data]);
    }

    public function show(Request $request, $id)
    {
        //
    }

    public function create()
    {
        $data = array('title' => 'Form Tambah Data Ustadz');
        return view('admin.ustadz.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [            
            'nama'=>'required',
            'nip'=>'required',
            'mapel'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
        ]);        
        $inputan = $request->all();//kita masukkan semua variabel data yang diinput ke variabel $inputan               
       
        $itemustadz = Ustadz::create($inputan);
        return redirect()->route('ustadz.index')->with('success', 'Data ustadz berhasil disimpan');
    }

    public function edit($id)
    {
        $itemustadz = Ustadz::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        $data = array('title' => 'Form Edit Kategori',
                    'itemustadz' => $itemustadz);
        return view('admin.ustadz.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required',
            'nip'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'mapel'=>'required',
        ]);
        $itemustadz = Ustadz::findOrFail($id);//cari berdasarkan id = $id, 
        $inputan = $request->all();
        $itemustadz->update($inputan);
        return redirect()->route('ustadz.index')->with('success', 'Data berhasil diupdate');
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new UstadzImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return redirect()->route('ustadz.index')->with('success', 'Data berhasil ditambah');
    }

    public function export() 
    {
        return Excel::download(new UstadzExport, 'ustadz.xlsx');
    }

    public function uploadimage(Request $request) {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ustadz_id' => 'required',
        ]);
        // $itemuser = $request->user();
        $itemkategori = Ustadz::where('id', $request->ustadz_id)
                                ->first();
        if ($itemkategori) {
            $fileupload = $request->file('image');
            $folder = 'assets/images';
            $itemgambar = $this->upload($fileupload, $folder);
            $inputan['foto'] = $itemgambar->url;//ambil url file yang barusan diupload
            // var_dump($request->ustadz_id);exit();
            $itemkategori->update($inputan);
            return back()->with('success', 'Image berhasil diupload');
        } else {
            return back()->with('error', 'Kategori tidak ditemukan');
        }
    }

    public function deleteimage(Request $request, $id) {        
        $itemustadz = Ustadz::where('id', $id)
                                ->first();
        if ($itemustadz) {
            // kita cari dulu database berdasarkan url gambar
            $itemgambar = Photo::where('url', $itemustadz->foto)->first();
            // hapus imagenya
            if ($itemgambar) {
                Storage::delete($itemgambar->url);
                $itemgambar->delete();
            }
            // baru update foto kategori
            $itemustadz->update(['foto' => null]);
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }

    public function upload($fileupload, $folder) {
        $path = $fileupload->store('public/photos');    
        $inputangambar['url'] = $path;                
        return Photo::create($inputangambar);
    }

    public function destroy($id)
    {
        $itemustadz = Ustadz::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        // if (count($itemkategori->images) > 0) {
        //     // dicek dulu, kalo ada produk di dalam kategori maka proses hapus dihentikan
        //     return back()->with('error', 'Hapus terlebih dahulu seluruh gambar di dalam kategori ini, proses dihentikan');
        // } else {
        // }
        if ($itemustadz->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
       
}
