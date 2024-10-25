<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request){
        return view('pages.frontend.home');
    }

    public function commingsoon(Request $request){
        return view('pages.commingsoon');
    }
}
