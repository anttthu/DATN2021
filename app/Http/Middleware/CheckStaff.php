<?php

namespace App\Http\Middleware;

use Closure;

class CheckStaff
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
        $staffs = [1, 2, 3];
        $role = auth()->user()->role_id;
        if (in_array($role, $staffs)) {
            return $next($request);
        }
        return redirect('/GioiThieu');
    }
}
