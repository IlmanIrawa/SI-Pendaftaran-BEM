<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendaftaranModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function postdaftar(Request $request)
{
    // Validate the form data
    
    // Handle the photo upload
    $filename = null;
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $filename = time(). '.'. $foto->getClientOriginalExtension();
        $foto->storeAs('public/asset/img', $filename);
    }

    // Simpan data pendaftaran
    PendaftaranModel::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp,
        'email' => $request->email,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_pendaftaran' => now(), // Ubah sesuai dengan kebutuhan Anda
        'jurusan' => $request->jurusan,
        'status_mahasiswa' => $request->status_mahasiswa,
        'foto' => $filename,
    ]);

    Session::flash('success', 'Registrasi berhasil! Silahkan lanjutkan login.');
    return redirect()->route('pendaftaran'); // Ubah ini sesuai dengan rute yang benar
}

}
