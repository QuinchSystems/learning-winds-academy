<?php

namespace App\Http\Middleware;

use App\Category;
use Closure;

class CategoryMenuView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $categories = Category::with('courses:category_id,id,display_name')->get(['id', 'name', 'coursecount']);
        view()->share('categoryMenu', $categories);
        return $next($request);
    }
}
