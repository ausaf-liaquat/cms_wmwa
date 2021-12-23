<?php

namespace App\Http\Controllers\Practitioner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Practitioner;
use Auth;

class LoginController extends Controller
{
    public function LoginIndex()
    {
        return view('Practitioner.login');
    }
    public function LoginPost(Request $request)
    {
          $credentials = $request->only('email','password');
          if (Auth::guard('practitioner')->attempt($credentials,$request->remember)) {
                    $user = Practitioner::where('email',$request->email)->first();
                    Auth::guard('practitioner')->login($user);
                    return redirect()->route('practitioner.dashboard');
          } 
          return redirect()->route('practitioner.authenticate')->with('error','These credentials do not match our records.');
    }
   
}
