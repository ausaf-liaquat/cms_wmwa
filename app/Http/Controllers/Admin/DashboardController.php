<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Practitioner;
use App\Notifications\WelcomePractitioner;
class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }
    public function PractitionerAccount()
    {
        return view('Admin.practitioners');
    }
    public function ServiceUser()
    {
        return view('Admin.services_users');
    }
    public function Resources()
    {
        return view('Admin.resources');
    }

    public function PractitionerStore(Request $request)
    {
      $practitioner= Practitioner::create([
           'name'=>$request->practitioner_name,
           'email'=>$request->practitioner_email,
           'category'=>$request->practitioner_role
       ]);
       $token = Password::getRepository()->create($practitioner);
       $practitioner->notify(new WelcomePractitioner($token));
       return response()->json(200);

        
    }
}
