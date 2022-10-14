<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function kurikulum(){
        return view('admin.upload-pdf.kurikulum',[
            'file' => File::where('ket', 'kurikulum')->get(),
        ]);
    }
    public function sistem(){
        return view('admin.upload-pdf.sistem',[
            'file' => File::where('ket', 'sistem')->get(),
        ]);
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'ket' => 'required',
        ]);

        $validate['file'] = $request->file('file')->store('public/pdf');

        File::create($validate);
        
        return back()->with('success', 'File berhasil diupload');
    }

    public function destroy($id) {
        $itemfile = File::where('id', $id)
                            ->first();
        if ($itemfile) {
            Storage::delete($itemfile->file);
            $itemfile->delete();
            return redirect('admin/kurikulum')->with('success', 'File berhasil dihapus');
        } else {
            return redirect('admin/kurikulum')->with('error', 'File tidak ditemukan');
        }
    }
}
