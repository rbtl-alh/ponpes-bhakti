<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriGaleri;
use App\Models\Image;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemkategori = KategoriGaleri::withCount('images')->orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Kategori Produk',
                    'itemkategori' => $itemkategori);
        return view('admin.galeri.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Form Kategori');
        return view('admin.galeri.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [            
            'nama_kategori'=>'required',
        ]);
        $itemuser = $request->user();//kita panggil data user yang sedang login
        $inputan = $request->all();//kita masukkan semua variabel data yang diinput ke variabel $inputan
        $inputan['user_id'] = $itemuser->id;        
        //slug kita gunakan nanti pas buka produk per kategori        
        $itemkategori = KategoriGaleri::create($inputan);
        return redirect()->route('galeri.index')->with('success', 'Data kategori berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $itemuser = $request->user();
        $itemkategori = KategoriGaleri::findOrFail($id);//cari berdasarkan id = $id, 
        $itemgambar = Image::where('user_id', $itemuser->id)
                            ->where('kategori_id', $id)
                            ->paginate(20);
        // kalo ga ada error page not found 404
        $data = array('title' => 'Form Edit Kategori',
                    'itemkategori' => $itemkategori,
                    'itemgambar' => $itemgambar);
        return view('admin.galeri.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemkategori = KategoriGaleri::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        $data = array('title' => 'Form Edit Kategori',
                    'itemkategori' => $itemkategori);
        return view('admin.galeri.edit', $data);
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
            'nama_kategori'=>'required',
        ]);
        $itemkategori = KategoriGaleri::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404        
        // kita validasi dulu, biar tidak ada slug yang sama        
        // $validasislug = KategoriGaleri::where('nama_kategori', '!=', $itemkategori->nama_kategori);//yang id-nya tidak sama dengan $id
        // //                         ->first();

        // if ($validasislug) {
        //     return back()->with('error', 'Slug sudah ada, coba yang lain');
        // } else {
        //     $inputan = $request->all();
        //     $itemkategori->update($inputan);
        //     return redirect()->route('galeri.index')->with('success', 'Data berhasil diupdate');
        // }
        $inputan = $request->all();
        $itemkategori->update($inputan);
        return redirect()->route('galeri.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemkategori = KategoriGaleri::findOrFail($id);//cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        if (count($itemkategori->images) > 0) {
            // dicek dulu, kalo ada produk di dalam kategori maka proses hapus dihentikan
            return back()->with('error', 'Hapus terlebih dahulu seluruh gambar di dalam kategori ini, proses dihentikan');
        } else {
            if ($itemkategori->delete()) {
                return back()->with('success', 'Data berhasil dihapus');
            } else {
                return back()->with('error', 'Data gagal dihapus');
            }
        }
        // if ($itemkategori->delete()) {
        //     return back()->with('success', 'Data berhasil dihapus');
        // } else {
        //     return back()->with('error', 'Data gagal dihapus');
        // }

    }
}
