<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function simpanregister(Request $request)
    {
       //dd($request->all());
       user::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
            'konfirmasi_password' => Hash::make($request->konfirmasi_password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'remember_token'=>str::random(60),
       ]);
       Session::flash('success', 'Registrasi berhasil! Silahkan lanjutkan login.');
       return view('register');
    }
}