<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaranModel;

class DashboardController extends Controller
{
    public function dbmhs()
    {
        return view('dbmhs');
    }
}
