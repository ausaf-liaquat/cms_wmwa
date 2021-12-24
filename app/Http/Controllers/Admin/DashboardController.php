<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use App\Models\User;
use App\Notifications\WelcomePractitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }
    public function PractitionerAccount()
    {
        $practitioners = Practitioner::all();
        $practitionercount = Practitioner::count();
        return view('Admin.practitioners', compact('practitioners','practitionercount'));
    }
    public function ServiceUser()
    {
        $practitioners = Practitioner::all();
        return view('Admin.services_users',compact('practitioners'));
    }
    public function Resources()
    {
        return view('Admin.resources');
    }

    public function PractitionerStore(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'unique:practitioners',
        ]);
        if ($validator->passes()) {

            $practitioner = Practitioner::create([
                'name' => $request->practitioner_name,
                'email' => $request->practitioner_email,
                'category' => $request->practitioner_role,
                'status'=>"Pending",
            ]);
            $token = Password::getRepository()->create($practitioner);
            $practitioner->notify(new WelcomePractitioner($token));
            return response()->json(200);
        }
        return response()->json(['error' => $validator->errors()->all()]);
    }
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $isExists = Practitioner::where('email', $email)->first();
        if ($isExists) {
            return response()->json(array("exists" => true));
        } else {
            return response()->json(array("exists" => false));
        }
    }

    public function PractitionerEdit($id)
    {
        $practitioner = Practitioner::find($id);
        return response()->json($practitioner, 200);
    }
    public function PractitionerUpdate(Request $request, $id)
    {
        if ($request->editpractitioner_name != null && $request->editpractitioner_role != null) {
            Practitioner::find($id)->update(['name' => $request->editpractitioner_name, 'category' => $request->editpractitioner_role]);
        }
        return response()->json(200);
    }
    public function PractitionerDelete(Request $request)
    {
        Practitioner::find($request->getpractitioner_id)->delete();
        return redirect()->route('admin.practitioner');
    }
    public function PractitionerStatus()
    {
        return view('Practitioner.status');
    }

    // Service User 

    public function ServiceUsercheckEmail(Request $request)
    {
        $email = $request->input('email');
        $isExists = User::where('email', $email)->first();
        if ($isExists) {
            return response()->json(array("exists" => true));
        } else {
            return response()->json(array("exists" => false));
        }
    }

    public function ServiceUserStore(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'unique:users',
        ]);
        if ($validator->passes()) {

            $serviceuser = User::create([
                'name' => $request->serviceuser_name,
                'email' => $request->serviceuser_email,
                'category' => $request->serviceuser_category,
                'practitioner_id'=>$request->serviceuser_practitioner,
                
            ]);
            // $token = Password::getRepository()->create($serviceuser);
            // $serviceuser->notify(new WelcomeServiceUser($token));
            return response()->json(200);
        }
        return response()->json(['error' => $validator->errors()->all()]);
    }
}
