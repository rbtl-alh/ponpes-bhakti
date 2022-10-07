<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UstadzImport;
use App\Exports\UstadzExport;
use Maatwebsite\Excel\Facades\Excel; 
use App\Models\Ustadz;

class UstadzController extends Controller
{
    public function index(){
        //mengambil data user
        $data = Ustadz::all();
        //menampilkan halaman user dan mengirim variabel data berisi data user
        return view('admin.ustadz.index', ['data' => $data]);
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

    public function import(Request $request){
        //melakukan import file
        Excel::import(new UstadzImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }

    public function export() 
    {
        return Excel::download(new UstadzExport, 'ustadz.xlsx');
    }
       
}
