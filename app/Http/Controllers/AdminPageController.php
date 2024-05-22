<?php

namespace App\Http\Controllers;
use App\Models\rekapModel;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    public function AdminPage()
    {
        return view('AdminPage');
    }
    public function rekap()
    {
        $pendaftarans = rekapModel::all(); // Mengambil semua data dari tabel pendaftaran_models
        return view('rekap', compact('pendaftarans')); // Menampilkan view 'rekap' dengan data pendaftaran
        return view('rekap');
    }
    public function print()
    {
        $pendaftarans = rekapModel::all(); // Ganti YourModel dengan model yang sesuai

        return view('print', compact('pendaftarans'));
    }
}
