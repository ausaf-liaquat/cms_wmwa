<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_ApplicationForm extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['job_title',
        'job_location',
        'job_advertised',
        'job_otherinfo',
        'personaldetails_name',
        'personaldetails_address',
        'personaldetails_phoneno',
        'personaldetails_mobileno',
        'personaldetails_email',
        'personaldetails_nino',
        'personaldetails_requirepermit',
        'personaldetails_requirevisa',
        'personaldetails_validvisa',
        'personaldetails_visaexpire',
        'personaldetails_visaheldtype',
        'personaldetails_relatedwmwa',
        'personaldetails_relateddetail',
        'personaldetails_drivinglicence',
        'personaldetails_domesticabuse',
        'personaldetails_domesticabusecurrently',
        'doc_conviction',
        'doc_ifyesconvicteddetails',
        'doc_childrenbarredlist',
        'doc_adultbarredlist',
        'doc_pastconviction',
        'reference1_name',
        'reference1_jobtitle',
        'reference1_address',
        'reference1_phoneno',
        'reference1_email',
        'reference1_refrelation',
        'reference2_name',
        'reference2_jobtitle',
        'reference2_address',
        'reference2_phoneno',
        'reference2_email',
        'reference2_refrelation',
        'education_academicqualification',
        'education_othertrainings',
        'emphistory_nameaddress',
        'emphistory_dateemployedfrom',
        'emphistory_dateemployedto',
        'emphistory_jobtitle',
        'emphistory_jobdescription',
        'emphistory_reasonofleaving',
        'emphistory_annualsalary',
        'emphistory_periodofnotice',
        'emphistory_workhistory',
        'emphistory_workgapreason',
        'suitability',
        'wmwa_interests',
        'signature',
    ];

    protected $table = "job_applicationforms";
}
