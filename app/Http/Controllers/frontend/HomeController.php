<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Brands;
use App\Models\Countries;
use App\Models\Products;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::where('status',1)->get();
        return view('pages.frontend.home',compact('products'));
    }

    public function comingSoon()
    {
        //echo 'Test';
        return view('pages.commingsoon');
    }

    public function about(Request $request){
        return view('pages.frontend.about');
    }

    public function contact(Request $request){
        return view('pages.frontend.contact');
    }

    public function products(Request $request){
        $products = Products::where('status',1)->get();
        return view('pages.frontend.products', compact('products'));
    }
}
