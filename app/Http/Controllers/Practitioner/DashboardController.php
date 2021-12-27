<?php

namespace App\Http\Controllers\Practitioner;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use App\Models\User;
use App\Models\Resource;
use App\Notifications\WelcomeServiceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Practitioner.dashboard');
    }

    public function AccountDetails()
    {
        $practitioner = Practitioner::find(Auth::user()->id);

        return view('Practitioner.account', compact('practitioner'));
    }
    public function AccountEdit(Request $request)
    {
        if ($request->practitioner_name != null && $request->practitioner_role != null && $request->practitioner_email != null) {
            Practitioner::find(Auth::user()->id)->update([
                'name' => $request->practitioner_name,
                'category' => $request->practitioner_role,
                'email' => $request->practitioner_email,
            ]);
        }
        if ($request->practitioner_password != null) {
            Practitioner::find(Auth::user()->id)->update([
                'password' => Hash::make($request->practitioner_password),
            ]);
        }
        return response()->json(200);
    }

    //Service User

    public function ServiceUser()
    {
        $serviceusers = User::all();
        $practitioner = Practitioner::find(Auth::user()->id);
        $serviceuserscount = User::count();
        return view('practitioner.services_users', compact('serviceusers', 'practitioner', 'serviceuserscount'));
    }
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
        $serviceuser = User::create([
            'name' => $request->serviceuser_name,
            'email' => $request->serviceuser_email,
            'category' => $request->serviceuser_category,
            'practitioner_id' => $request->serviceuser_practitioner,
        ]);
        $token = Password::getRepository()->create($serviceuser);
        $serviceuser->notify(new WelcomeServiceUser($token));
        return response()->json(200);
    }
    public function ServiceUserEdit($id)
    {
        $serviceuser = User::find($id);
        return response()->json($serviceuser, 200);
    }
    public function ServiceUserUpdate(Request $request, $id)
    {
        if ($request->editserviceuser_name != null && $request->editserviceuser_category != null && $request->editserviceuser_practitioner != null) {
            User::find($id)->update(['name' => $request->editserviceuser_name, 'category' => $request->editserviceuser_category, 'practitioner_id' => $request->editserviceuser_practitioner]);
        }
        return response()->json(200);
    }
    public function ServiceUserDelete(Request $request)
    {
        User::find($request->getserviceuser_id)->delete();
        return redirect()->route('practitioner.serviceuser');
    }
    public function Resource()
    {
        $resources = Resource::all();
        $serviceusers = User::all();
        $practitioner = Practitioner::find(Auth::user()->id);
        return view('Practitioner.recources', compact('resources','serviceusers','practitioner'));
    }
}
