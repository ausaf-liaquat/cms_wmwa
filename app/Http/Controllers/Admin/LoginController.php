<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginIndex()
    {
        return view('Admin.login');
    }
    
    public function LoginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $user = Admin::where('email', $request->email)->first();
            Auth::guard('admin')->login($user);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.authenticate')->with('error', 'These credentials do not match our records.');
    }

    public function Logout(Request $request)
    {
        Auth::guard('admin')->logout();

       
        return redirect()->route('admin.authenticate');
    }

}
