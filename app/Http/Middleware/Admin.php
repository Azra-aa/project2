<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user->email != 'admin@gmail.com') {
            return redirect('/')->with('error', 'Anda tidak memiliki akses admin!');
        }

        session()->flash('success', 'Selamat datang di halaman Admin!');    
        return $next($request);
    }
}
