<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deskripsi;

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
}
