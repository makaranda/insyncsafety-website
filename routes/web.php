<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route for the coming soon page with both GET and POST methods
Route::match(['get', 'post'], '/', [HomeController::class, 'comingSoon'])->name('pages.comingsoon');

// Route for the home page with GET method only
Route::get('/home', [HomeController::class, 'index'])->name('pages.home');
Route::get('/about-us', [HomeController::class, 'about'])->name('pages.about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('pages.contact');

Route::prefix('products')->group(function () {
    Route::get('/', [HomeController::class, 'products'])->name('pages.products');
    Route::get('/{slug}',[HomeController::class,'singleProduct'])->where('slug', '[a-zA-Z0-9-]+')->name('pages.singleproduct');
    Route::get('/category/{category-slug}',[HomeController::class,'categoryList'])->name('pages.categoryList');
});
