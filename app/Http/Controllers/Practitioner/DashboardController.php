<?php

namespace App\Http\Controllers\Practitioner;

use App\Http\Controllers\Controller;
use App\Models\Practitioner;
use App\Models\Resource;
use App\Models\User;
use App\Models\ShareWorkbook;
use App\Models\Admin;
use App\Models\Topic;
use App\Notifications\WelcomeServiceUser;
use App\Notifications\PractitionerUpdatedUserDetails;
use App\Notifications\PractitionerDeletedUser;
use App\Notifications\WorkbookSent;
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
        $topic = Topic::all();
        return view('Practitioner.services_users', compact('serviceusers', 'practitioner', 'serviceuserscount','topic'));
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
        if ($request->editserviceuser_name != null && $request->editserviceuser_category != null && $request->editserviceuser_practitioner != null) {
            User::find($id)->update(['name' => $request->editserviceuser_name, 'category' => $request->editserviceuser_category, 'practitioner_id' => $request->editserviceuser_practitioner]);
            User::find($id)->notify(new PractitionerUpdatedUserDetails());
        }
        return response()->json(200);
    }
    public function ServiceUserDelete(Request $request)
    {
        $user = User::find($request->id);
        $user->notify(new PractitionerDeletedUser());
        $user->delete();
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
    public function markAsReadOne($id)
    {
        $userUnreadNotification = auth()->user()->unreadNotifications->where('id', $id)->first();

        if ($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
        }
       return redirect()->route('practitioner.dashboard')->with('status','Notification mark as read.');
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

    public function ServiceUserWorkbookDetails($id)
    {
        $share_workbook = ShareWorkbook::where('user_id', $id)->where('workbook_id', 1)->where('status','complete')->with('topic')->get();
        return response()->json(['share_workbook'=>$share_workbook], 200);
    }
    public function viewCompletedtopics($userid,$id)
    {
        // dd($id);
        if ($id == 1) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Practitioner.topics.topic_0', compact('topics','userid'));
        } elseif ($id == 2) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Practitioner.topics.topic_1', compact('topics','userid'));
        } elseif ($id==4) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Practitioner.topics.topic_2', compact('topics','userid'));
        }elseif ($id==6) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Practitioner.topics.topic_3', compact('topics','userid'));
        } elseif ($id==7) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Practitioner.topics.topic_4', compact('topics','userid'));
        } 
    }
}
