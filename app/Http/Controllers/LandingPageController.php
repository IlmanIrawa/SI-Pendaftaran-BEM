<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function LandingPage()
    {
        return view('LandingPage');
    }
}