<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    public function LoginAdmin()
    {
        return view('LoginAdmin');
    }

    public function simpanLogin(Request $request)
    {
       //dd(session('success'))
        
        if(Auth::attempt($request->only('nim', 'password'))){
            session::flash('success', 'Login Berhasil');
            return redirect('AdminPage');
        }
        
        return redirect('LoginAdmin')->with('error', 'Login Gagal, Cek Kembali NIM dan Password');
    }
}
