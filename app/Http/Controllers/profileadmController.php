<?php

namespace App\Http\Controllers;

use App\Models\profileModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileadmController extends Controller
{
    public function profileadm()
    {

        $profiles = profileModel::all(); 

        return view('profileadm', compact('profiles'));
        return view('profileadm');
        return view('profileadm');
    }

    

}
