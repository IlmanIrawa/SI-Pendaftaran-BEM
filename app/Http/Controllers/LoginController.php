<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function Login()
    {
        return view('Login');
    }

    public function postLogin(Request $request)
    {
       //dd(session('success'))
        
        if(Auth::attempt($request->only('nim', 'password'))){

            $request->session()->flash('success', 'Login Berhasil');
            
            return redirect('dbmhs');
        }
        
        return redirect('Login')->with('error', 'Login Gagal, Cek Kembali NIM dan Password');
    }
}
