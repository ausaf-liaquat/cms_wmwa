<?php

namespace App\Http\Controllers\Practitioner;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use Auth,DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function LoginIndex()
    {
        return view('Practitioner.login');
    }
    public function LoginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('practitioner')->attempt($credentials, $request->remember)) {
            $user = Practitioner::where('email', $request->email)->first();
            Auth::guard('practitioner')->login($user);
            return redirect()->route('practitioner.dashboard');
        }
        return redirect()->route('practitioner.authenticate')->with('error', 'These credentials do not match our records.');
    }
    public function practitionerResetPasswod(Request $request)
    {
        return view('Practitioner.password-reset', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function practitionerResetPasswodstore(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
             
            ])
            ->first();
            
        if (!$updatePassword ) {
            return redirect()->route('practitioner.authenticate')->with('error', 'Invalid details! please try again.');
        }elseif (Hash::check($request->token, $updatePassword->token)==false) {
            return redirect()->route('practitioner.authenticate')->with('error', 'Invalid details! please try again.');
        }else {
            $practitioner = Practitioner::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect()->route('practitioner.authenticate')->with('status', 'Password changed');
        }
        
    }
    public function Logout(Request $request)
    {
        Auth::guard('practitioner')->logout();

       
        return redirect()->route('practitioner.authenticate');
    }
}
