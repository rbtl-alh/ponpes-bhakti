<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deskripsi;
use App\Models\Visi;
use App\Models\Misi;

class ProfilController extends Controller
{
    public function desk(){
        return view('admin.profil.desk', [
            'desk' => Deskripsi::all()
        ]);
    }

    public function editDesk(Deskripsi $deskripsi){
        return view('admin.profil.edit-desk',[
            'desk' => $deskripsi
        ]);
    }

    public function updateDesk(Request $request, $id){
        $this->validate($request, [
            'deskripsi'=>'required',
        ]);
        $item = Deskripsi::findOrFail($id);//cari berdasarkan id = $id, 
        $inputan = $request->all();
        $item->update($inputan);
        return redirect()->route('profil.deskripsi')->with('success', 'Deskripsi berhasil diupdate');
    }

    public function visi(){
        return view('admin.profil.visi', [
            'visi' => Visi::all(),
            'misi' => Misi::all(),
        ]);
    }

    public function editVisi(Visi $visi){
        return view('admin.profil.edit-visi',[
            'visi' => $visi
        ]);
    }

    public function editMisi(Misi $misi){
        return view('admin.profil.edit-misi',[
            'misi' => $misi
        ]);
    }

    public function updateVisi(Request $request, $id){
        $this->validate($request, [
            'visi'=>'required',
        ]);
        $item = Visi::findOrFail($id);//cari berdasarkan id = $id, 
        $inputan = $request->all();
        $item->update($inputan);
        return redirect()->route('profil.visimisi')->with('success', 'Visi berhasil diupdate');
    }

    public function createMisi()
    {
        return view(('admin.profil.create-misi'));
    }

    public function storeMisi(Request $request)
    {
        $validate = $request->validate([
            'misi' => 'required',
         ]);

        Misi::create($validate);

        return redirect()->route('profil.visimisi')->with('seucces', 'Misi berhasil ditambahkan');
    }

    public function updateMisi(Request $request, $id){
        $this->validate($request, [
            'misi'=>'required',
        ]);
        $item = Misi::findOrFail($id);//cari berdasarkan id = $id, 
        $inputan = $request->all();
        $item->update($inputan);
        return redirect()->route('profil.visimisi')->with('success', 'Misi berhasil diupdate');
    }

    public function destroyMisi($id)
    {
        $misi = Misi::findOrFail($id);

        if ($misi->delete()) {
            return redirect('/admin/visimisi')->with('success', 'Misi berhasil dihapus');
        } else {
            return redirect('/admin/vismisi')->with('error', 'Misi gagal dihapus');
        }   
    }
}
