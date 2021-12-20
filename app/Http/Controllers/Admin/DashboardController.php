<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
