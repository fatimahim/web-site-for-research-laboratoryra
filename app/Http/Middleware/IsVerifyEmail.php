<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isVerfyEmail
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->is_active) {
            auth()->logout();
            return redirect()->route('login')
                    ->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
          }
   
        return $next($request);
    }

    private function conditionIsSatisfied()
    {
        // Implement your condition check here
        return true; // Change this to your actual condition check
    }
}
  /*  public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->is_active) {
            auth()->logout();
            return redirect()->route('login')
                    ->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
          }
   
        return $next($request);
    }
}*/