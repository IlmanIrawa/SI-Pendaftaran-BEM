<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftarModel;
use App\Models\accModel;

class statusController extends Controller
{
    public function status_pendaftaran()
    {
        return view('status_pendaftaran');
    }

    public function search(Request $request)
    {
        $nim = $request->input('nim');
        $pendaftarans = daftarModel::where('nim', $nim)->get();
        $accPendaftarans = accModel::where('nim', $nim)->get()->keyBy('nim');

        return view('status_pendaftaran', [
            'pendaftarans' => $pendaftarans,
            'accPendaftarans' => $accPendaftarans
        ]);
    }
}
