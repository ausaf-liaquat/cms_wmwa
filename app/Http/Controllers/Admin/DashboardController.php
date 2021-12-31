<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use App\Models\ShareWorkbook;
use App\Models\User;
use App\Models\WorkbookResponse;
use App\Notifications\WelcomePractitioner;
use App\Notifications\WelcomeServiceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Auth;
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
        return view('Admin.practitioners', compact('practitioners', 'practitionercount'));
    }

    public function Resources()
    {
        return view('Admin.resources');
    }

    public function PractitionerStore(Request $request)
    {

        $practitioner = Practitioner::create([
            'name' => $request->practitioner_name,
            'email' => $request->practitioner_email,
            'category' => $request->practitioner_role,
            'status' => "Pending",
        ]);
        $token = Password::getRepository()->create($practitioner);
        $practitioner->notify(new WelcomePractitioner($token));
        return response()->json(200);
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
    public function PractitionerViewAccounts($id)
    {
        $practitioner_viewaccounts = Practitioner::where('id', $id)->with('users')->first();

        return response()->json(['practitioner_viewaccounts' => $practitioner_viewaccounts], 200);

    }
    // Service User

    public function ServiceUser()
    {
        $serviceusers = User::all();
        $practitioners = Practitioner::all();
        $serviceuserscount = User::count();
        return view('Admin.services_users', compact('serviceusers', 'practitioners', 'serviceuserscount'));
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
        return redirect()->route('admin.serviceuser');
    }

    public function SendWorkbook(Request $request)
    {

        $workbook = ShareWorkbook::where('user_id', $request->serviceuser_id)->first();

        if (empty($workbook)) {
            $shareworkbook = ShareWorkbook::create([
                'workbook_id' => $request->send_workbook,
                'topic_id' => 1,
                'user_id' => $request->serviceuser_id,
                'status' => 'inprocess',
            ]);
            $shareworkbook->sent_date = now();
            $shareworkbook->save();
        }

        return response()->json(200);

    }
    public function viewWorkbook($id)
    {
        $workbookresponse = WorkbookResponse::where('user_id', $id)->where('workbook_id', 1)->latest()->first();
       dd($workbookresponse);
    }
}
