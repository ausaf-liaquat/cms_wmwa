<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate_RequestForm;
use App\Models\Job_ApplicationForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function CertificateForm()
    {
        $certificateform = Certificate_RequestForm::all();
        return view('Admin.forms.certificate_form', compact('certificateform'));
    }
    public function ViewCertificateForm($id)
    {
        $certificateformdetails = Certificate_RequestForm::findOrfail($id);
        return response()->json($certificateformdetails, 200);
    }
    public function DeleteCertificateForm(Request $request)
    {
        $Certificate_RequestForm = Certificate_RequestForm::find($request->id);
        $Certificate_RequestForm->delete();

        return response()->json(200);
    }


    public function JobApplicationForm()
    {
        $job_applicationForm = Job_ApplicationForm::all();
        return view('Admin.forms.jobapplication_form', compact('job_applicationForm'));
    }
}
