<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class profilController extends Controller
{
    public function profil()
    {
        // Assuming you want to fetch the currently authenticated user's profile
        $profiles = user::all(); 

        return view('profil', compact('profiles'));
        return view('profil');
        return view('profil');
    }
}
