<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Session;

class GlobalRedirectionMiddleware
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
        /**/
        $routes = array_map(function ($route) { return $route->uri;}, Route::getRoutes()->getRoutes());
        $sub = preg_replace('/' . preg_quote(url('') . '/', '/') . '/', '', $request->url());
        $sub = $sub == url('')? "/" : $sub; // Handle domain matching
        $routeExists = (in_array($sub, $routes));
        
        $routeWithQuery = preg_replace('/' . preg_quote(url(''), '/') . '\//', '', $request->fullUrl());
        $queryString = $request->getQueryString();
        // dd($routeWithQuery);

        if ($routeExists) { // 
            return $next($request);
        }
        session(['intended' => $routeWithQuery, 'query' => $queryString]);
        
        return redirect()->route('home');
    }
}
