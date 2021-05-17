<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class CheckRolesController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            return redirect()->route('admin.dashboard');
       }elseif(Auth::user()->hasRole('practitioner')){
            return redirect()->route('practitioner.dashboard');
       }elseif(Auth::user()->hasRole('user')){
        return redirect()->route('user.dashboard');}
    }
}
