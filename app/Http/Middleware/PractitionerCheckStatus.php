<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PractitionerCheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        //If the status is not approved redirect to login 
        if(Auth::check() && Auth::guard('practitioner')->user()->status != 'Active'){
            Auth::guard('practitioner')->logout();
            return redirect()->route('practitioner.login')->with('error', 'This account is not verified.');
        }
        return $response;
        // return $next($request);
    }
}
