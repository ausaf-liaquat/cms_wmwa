<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Practitioner;
use App\Models\ShareWorkbook;
use App\Models\Topic;
use App\Models\User;
use App\Models\WorkbookResponse;
use App\Notifications\WelcomePractitioner;
use App\Notifications\WelcomeServiceUser;
use App\Notifications\ServiceUserDetailsUpdated;
use App\Notifications\ServiceUserDeleted;
use App\Notifications\WorkbookSent;
use App\Notifications\PractitionerDetailsUpdated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
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
        $isServiceUserExists = User::where('email', $email)->first();
        $isAdminExixts = Admin::where('email', $email)->first();
        $isPractitionerExixts = Practitioner::where('email', $email)->first();
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
    }
    public function PractitionerUpdate(Request $request, $id)
    {
        if ($request->editpractitioner_name != null && $request->editpractitioner_role != null) {
            Practitioner::find($id)->update(['name' => $request->editpractitioner_name, 'category' => $request->editpractitioner_role]);
            Practitioner::find($id)->notify(new PractitionerDetailsUpdated());
        }
        return response()->json(200);
    }
    public function PractitionerDelete(Request $request)
    {
        Practitioner::find($request->id)->delete();
        return response()->json(200);
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
        $topic = Topic::all();
        return view('Admin.services_users', compact('serviceusers', 'practitioners', 'serviceuserscount', 'topic'));
    }
    public function ServiceUsercheckEmail(Request $request)
    {
        $email = $request->input('email');
        $isExists = User::where('email', $email)->first();
        $isAdminExixts=Admin::where('email', $email)->first();
        $isPractitionerExixts=Practitioner::where('email', $email)->first();
        if ($isExists || $isAdminExixts || $isPractitionerExixts) {
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
        if ($request->editserviceuser_name != null && $request->editserviceuser_category != null ) {
         $serviceuser = User::find($id)->update(['name' => $request->editserviceuser_name, 'category' => $request->editserviceuser_category, 'practitioner_id' => $request->editserviceuser_practitioner]);
         User::find($id)->notify(new ServiceUserDetailsUpdated());
        }
        return response()->json(200);
    }
    public function ServiceUserDelete(Request $request)
    {
       $user = User::find($request->id);
        $user->notify(new ServiceUserDeleted());
        // Mail::to($user)->send(new ServiceUserDeleted());
       $user->delete();
       
        return response()->json(200);
    }

    public function SendWorkbook(Request $request)
    {
        if (!empty($request->check)) {
            $workbook = ShareWorkbook::where('user_id', $request->sendserviceuser_id)->first();

            // dd($remainingtopics);
            if (empty($workbook)) {
                foreach ($request->check as $key => $value) {
                    $shareworkbook = ShareWorkbook::create([
                        'workbook_id' => 1,
                        'topic_id' => $value,
                        'user_id' => $request->sendserviceuser_id,
                        'status' => 'inprocess',
                        'practitioner_notes' => $request->practitionernotes,
                    ]);
                    $shareworkbook->sent_date = now();
                    $shareworkbook->save();

                }
                User::find($request->sendserviceuser_id)->notify(new WorkbookSent());
                return response()->json(['success' => 'Topics Sent Succesfully'], 200);
            } else {
                $topicsarray = ShareWorkbook::where('user_id', $request->sendserviceuser_id)->pluck('topic_id')->toArray();
                $remainingtopics = array_diff($request->check, $topicsarray);
                if (!empty($remainingtopics)) {
                    foreach ($remainingtopics as $key => $value) {
                        $shareworkbook = ShareWorkbook::create([
                            'workbook_id' => 1,
                            'topic_id' => $value,
                            'user_id' => $request->sendserviceuser_id,
                            'status' => 'inprocess',
                            'practitioner_notes' => $request->practitionernotes,
                        ]);
                        $shareworkbook->sent_date = now();
                        $shareworkbook->save();

                    }
                    User::find($request->sendserviceuser_id)->notify(new WorkbookSent());
                    return response()->json(['success' => 'Topics Sent Succesfully'], 200);
                }
                return response()->json(['error' => 'Topics Already sent'], 200);

            }

        } else {
            return response()->json(['error' => 'Please select Topics to send'], 200);
        }

    }
    public function viewWorkbook($id)
    {
        $workbookresponse = WorkbookResponse::where('user_id', $id)->where('workbook_id', 1)->latest()->first();
        //    dd($workbookresponse);
    }
  
}
