<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Imports\SiswaImport;
use App\Exports\SiswaExport;
use App\Models\Provinsi;
use App\Http\Controllers\DependantDropdownController;
use Maatwebsite\Excel\Facades\Excel; 

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('admin.siswa.index', [
            'siswa' => Siswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create',[
            "siswa" => Siswa::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([          
            'nama'=>'required',
            'nisn'=>'required',            
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
        ]);      
        
        Siswa::create($validate);


        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.siswa.edit', [
            'siswa' => Siswa::where('id', $id)->first(),
        ]);
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
        $validate = $request->validate([          
            'nama'=>'required',
            'nisn'=>'required',            
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
        ]);      
        
        Siswa::where('id', $id)->update($validate);


        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        if ($siswa->delete()) {
            return redirect('/admin/siswa')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/admin/siswa')->with('error', 'Data gagal dihapus');
        }  
    }
    
    public function import(Request $request){
        //melakukan import file
        Excel::import(new SiswaImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambah');
    }

    public function export() 
    {
        return Excel::download(new SiswaExport, 'data-siswa.xlsx');
    }
}
