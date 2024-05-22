<?php

namespace App\Http\Controllers;

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\UserModel;

class AdminRegController extends Controller
{
    public function AdminReg()
    {
        return view('AdminReg');
    }
    public function postAdminReg(Request $request)
    {
        //dd($request->all());
    
        // Buat record baru dalam tabel user_adm
        $user_models = UserModel::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'divisi' => $request->divisi,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            
        ]);

        // Flash message untuk sukses
        Session::flash('success', 'Registrasi berhasil! Silahkan lanjutkan login.');

        return view('AdminReg');
    }
}