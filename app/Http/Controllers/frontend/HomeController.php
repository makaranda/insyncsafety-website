<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.frontend.home');
    }

    public function comingSoon()
    {
        //echo 'Test';
        return view('pages.commingsoon');
    }
}
