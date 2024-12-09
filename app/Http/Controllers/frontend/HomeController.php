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
        $category = '';
        $categoryName = '';

        return view('pages.frontend.products', compact('products','category'));
    }

    public function categoryList(Request $request, $category_name)
    {
        // Format the category name
        $categoryName = ucwords(str_replace('-', ' ', $category_name));

        // Fetch the category
        $category = Categories::where('status', 1)
            ->where('name', 'LIKE', '%' . $categoryName . '%')
            ->first();
        //dd($category);
        // If category not found, return 404
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        // Fetch products for the category
        $category_id = $category->id;
        $products = Products::where('status', 1)
            ->where('category_id', $category_id)
            ->get();

        //dd($products);
        // Return the view with products
        return view('pages.frontend.products', compact('products', 'category'));
    }


    public function singleProduct(Request $request,$slug){
        $random_products = Products::where('status',1)->inRandomOrder()->limit(120)->get();
        $random_categories = Categories::where('status',1)->withCount('products')->inRandomOrder()->limit(5)->get();
        $product_details = Products::where('status',1)->where('slug','LIKE','%'.$slug.'%')->first();
        $brands = Brands::where('status',1)->get();
        // dd($random_categories);
        return view('pages.frontend.singleproduct', compact('product_details','brands','random_products','random_categories'));
    }

    public function fetchProducts(Request $request){

        $query = Products::query();
        //$getAllRoutePermisssions = AcAccounts::all();
        //s_code s_name s_status s_type search_customer_id
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', '=', $request->category_id);
        }

        $query->where('status', 1);

        $query->orderBy('id', 'DESC');
        $query->limit(120);

        $fetchTableDetails = $query->get();
        //$fetchTableDetails = Currencies::all();

        $responses = '';
        $debit_total = 0;
        $credit_total = 0;

        $sqlQuery = $query->toSql();
        $bindings = $query->getBindings();
        $testQuery = vsprintf(str_replace('?', '%s', $sqlQuery), $bindings);

            // dd(vsprintf(str_replace('?', '%s', $sqlQuery), $bindings));
        $fetchTableDetails = $query->paginate(18);
        $responses = view('pages.frontend.tables.fetch_products', compact('fetchTableDetails'))->render();

        return response()->json(['html' => $responses,'testQuery' => $testQuery]);
    }
}
