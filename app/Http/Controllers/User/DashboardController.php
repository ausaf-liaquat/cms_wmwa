<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use App\Models\ShareWorkbook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('User.dashboard');
    }
    public function AccountDetails()
    {
        $serviceuser = User::find(Auth::user()->id);

        return view('User.account', compact('serviceuser'));
    }
    public function AccountEdit(Request $request)
    {
        if ($request->serviceuser_name != null && $request->serviceuser_role != null && $request->serviceuser_email != null) {
            User::find(Auth::user()->id)->update([
                'name' => $request->serviceuser_name,
                'category' => $request->serviceuser_role,
                'email' => $request->serviceuser_email,
            ]);
        }
        if ($request->serviceuser_password != null) {
            User::find(Auth::user()->id)->update([
                'password' => Hash::make($request->serviceuser_password),
            ]);
        }
        return response()->json(200);
    }
    public function Resource()
    {

        $serviceusers = User::where('id', Auth::user()->id)->pluck('category')->toArray();

        $resources_file = Resource::whereIn('resource_category', $serviceusers)->where('resource_type', 'file')->get();

        $resources_url = Resource::whereIn('resource_category', $serviceusers)->where('resource_type', 'url')->get();

        $resources_video = Resource::whereIn('resource_category', $serviceusers)->where('resource_type', 'link')->get();

        return view('User.resource', compact('resources_file', 'resources_url', 'resources_video'));
    }

    public function Myworkbook()
    {
        $shareworkbook = ShareWorkbook::where('user_id', Auth::user()->id)->get();
        return view('User.workbook', compact('shareworkbook'));
    }
}
