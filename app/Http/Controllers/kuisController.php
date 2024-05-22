<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kuis;
use App\Http\Controllers\Controller;

class kuisController extends Controller
{
    public function kuis()
    {
        return view('kuis');
    }

    public function postkuis(Request $request)
    {
       //dd($request->all());
       kuis::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            
       ]);
       return redirect('kuis');
    }
}
