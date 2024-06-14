<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
         
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
               /* return "mansoor"; */
                $user = Auth::guard($guard)->user();
                
                if ($user->is_admin) {
                    
                    return redirect()->route('admin.home'); // Redirect to the admin home page
                }else{
                    return redirect(RouteServiceProvider::HOME);// Redirect to the regular home page
                }
                
            }
        }

        return $next($request);
    }
}
