<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Admin as Middleware;
use Illuminate\Support\Facades\Auth;

class Role {

  public function handle($request, Closure $next, String $role) {
    if (!Auth::check()) // This isnt necessary, it should be part of your 'auth' middleware
      return route('home');

        $user = Auth::user();
        if($user->adminUser == $role)
            return $next($request);

    return route('home');
  }
}