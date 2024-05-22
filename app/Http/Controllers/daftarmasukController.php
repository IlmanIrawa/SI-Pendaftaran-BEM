<?php

namespace App\Http\Controllers;
use App\Models\daftarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daftarmasukController extends Controller
{
    public function daftarmasuk()
    {
        $pendaftarans = daftarModel::all(); // Mengambil semua data dari tabel pendaftaran_models
        return view('daftarmasuk', compact('pendaftarans')); // Menampilkan view 'rekap' dengan data pendaftaran
        return view('daftarmasuk');
        return view('daftarmasuk');
    }
}
