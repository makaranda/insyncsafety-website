<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use App\Models\Categories;

class ShareRandomCategories
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $random_categories = Categories::where('status', 1)
        ->withCount('products')
        ->inRandomOrder()
        ->limit(5)
        ->get();

        // Share the variable with all views
        View::share('random_categories', $random_categories);

        return $next($request);
    }
}
