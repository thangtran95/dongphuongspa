<?php


namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;

class VerifyUserAdmin
{
    public function handle($request, $next)
    {
        if (Session::get('admin') == null ) {

            return redirect('/admin/login.html');
        }
        else{
            return $next($request);
        }
    }
}