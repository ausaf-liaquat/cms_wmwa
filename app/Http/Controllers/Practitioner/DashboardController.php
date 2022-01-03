<?php

namespace App\Http\Controllers\Practitioner;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use App\Models\Resource;
use App\Models\User;
use App\Models\Admin;
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

        $serviceusers = User::where('practitioner_id', Auth::user()->id)->pluck('category')->toArray();

        $resources_file = Resource::whereIn('resource_category', $serviceusers)->where('resource_type', 'file')->get();

        $resources_url = Resource::whereIn('resource_category', $serviceusers)->where('resource_type', 'url')->get();

        $resources_video = Resource::whereIn('resource_category', $serviceusers)->where('resource_type', 'link')->get();

        return view('Practitioner.recources', compact('resources_file', 'resources_url', 'resources_video'));
    }
    public function practitionerResourceDownload($id)
    {
        $resource = Resource::where('id', $id)->firstOrFail();
        $pathToFile = storage_path('app/public/resource/files/' . $resource->resource_file);
        return response()->download($pathToFile);
    }
    public function WorkbookGuidance()
    {
        return view("Practitioner.workbookguidance");
    }
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $isServiceUserExists = User::where('email', $email)->first();
        $isAdminExixts=Admin::where('email', $email)->first();
        $isPractitionerExixts=Practitioner::where('email', $email)->first();
        if ($isServiceUserExists || $isAdminExixts || $isPractitionerExixts) {
            return response()->json(array("exists" => true));
        } else {
            return response()->json(array("exists" => false));
        }
    }
    public function PractitionerEdit($id)
    {
        $practitioner = Practitioner::find($id);
        return response()->json($practitioner, 200);
        return redirect()->back()->withErrors($validator)->withInput();
    }
}
