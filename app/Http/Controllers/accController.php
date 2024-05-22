<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\accModel;
use App\Models\daftarModel;
use Illuminate\Support\Facades\Session;

class accController extends Controller
{
    public function acc()
    {
        // Mengambil data dari model daftarModel
        $pendaftarans = daftarModel::all();
        
        // Menampilkan view 'acc' dengan data dari daftarModel
        return view('acc', compact('pendaftarans'));
    }

    public function postacc(Request $request)
    {
        // Validasi data yang diposting
        $validatedData = $request->validate([
            'nim' => 'required',
            'status' => 'required',
            'catatan' => 'required',
        ]);

        // Menyimpan data yang diposting ke dalam model accModel
        accModel::create([
            'nim' => $request->nim,
            'status' => $request->status,
            'catatan' => $request->catatan,
        ]);
   
        // Menyiapkan flash message untuk ditampilkan
        Session::flash('success', 'Status Request Pendaftaran Berhasil Terkirim');
        
        // Mengarahkan kembali ke view 'acc'
        return redirect()->route('daftarmasuk');
    }
}
