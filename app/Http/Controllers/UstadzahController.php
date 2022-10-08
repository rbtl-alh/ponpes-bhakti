<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ustadzah;
use App\Imports\UstadzahImport;
use App\Exports\UstadzahExport;
use Maatwebsite\Excel\Facades\Excel; 
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class UstadzahController extends Controller
{
    public function index(){
        //mengambil data user
        $data = Ustadzah::all();
        //menampilkan halaman user dan mengirim variabel data berisi data user
        return view('admin.ustadzah.index', ['data' => $data]);
    }

    public function create()
    {
        $data = array('title' => 'Form Tambah Data Ustadz');
        return view('admin.ustadzah.create', $data);
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
        $itemustadzah = Ustadzah::create($inputan);
        return redirect()->route('ustadzah.index')->with('success', 'Data ustadzah berhasil disimpan');
    }

    public function edit($id)
    {
        $itemustadzah = Ustadzah::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        $data = array('title' => 'Form Edit Kategori',
                    'itemustadzah' => $itemustadzah);
        return view('admin.ustadzah.edit', $data);
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
        $itemustadz = Ustadzah::findOrFail($id);//cari berdasarkan id = $id, 
        $inputan = $request->all();
        $itemustadz->update($inputan);
        return redirect()->route('ustadzah.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $itemustadzah = Ustadzah::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        // if (count($itemkategori->images) > 0) {
        //     // dicek dulu, kalo ada produk di dalam kategori maka proses hapus dihentikan
        //     return back()->with('error', 'Hapus terlebih dahulu seluruh gambar di dalam kategori ini, proses dihentikan');
        // } else {
        // }
        if ($itemustadzah->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new UstadzahImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }

    public function export() 
    {
        return Excel::download(new UstadzahExport, 'ustadzah.xlsx');
    }

    public function uploadimage(Request $request) {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ustadzah_id' => 'required',
        ]);
        // $itemuser = $request->user();
        $itemustadzah = Ustadzah::where('id', $request->ustadzah_id)
                                ->first();
        if ($itemustadzah) {
            $fileupload = $request->file('image');
            $folder = 'assets/images';
            $itemgambar = $this->upload($fileupload, $folder);
            $inputan['foto'] = $itemgambar->url;//ambil url file yang barusan diupload
            // var_dump($request->ustadz_id);exit();
            $itemustadzah->update($inputan);
            return back()->with('success', 'Image berhasil diupload');
        } else {
            return back()->with('error', 'Kategori tidak ditemukan');
        }
    }

    public function deleteimage(Request $request, $id) {        
        $itemustadzah = Ustadzah::where('id', $id)
                                ->first();
        if ($itemustadzah) {
            // kita cari dulu database berdasarkan url gambar
            $itemgambar = Photo::where('url', $itemustadzah->foto)->first();
            // hapus imagenya
            if ($itemgambar) {
                Storage::delete($itemgambar->url);
                $itemgambar->delete();
            }
            // baru update foto kategori
            $itemustadzah->update(['foto' => null]);
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
}
