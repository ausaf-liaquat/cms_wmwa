<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applicationforms', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('job_location')->nullable();
            $table->string('job_advertised')->nullable();
            $table->string('job_otherinfo')->nullable();
            $table->string('personaldetails_name')->nullable();
            $table->string('personaldetails_address')->nullable();
            $table->string('personaldetails_phoneno')->nullable();
            $table->string('personaldetails_mobileno')->nullable();
            $table->string('personaldetails_email')->nullable();
            $table->string('personaldetails_nino')->nullable();
            $table->string('personaldetails_requirepermit')->nullable();
            $table->string('personaldetails_requirevisa')->nullable();
            $table->string('personaldetails_validvisa')->nullable();
            $table->string('personaldetails_visaexpire')->nullable();
            $table->string('personaldetails_visaheldtype')->nullable();
            $table->string('personaldetails_relatedwmwa')->nullable();
            $table->string('personaldetails_relateddetail')->nullable();
            $table->string('personaldetails_drivinglicence')->nullable();
            $table->string('personaldetails_domesticabuse')->nullable();
            $table->string('personaldetails_domesticabusecurrently')->nullable();
            $table->string('doc_conviction')->nullable();
            $table->string('doc_ifyesconvicteddetails')->nullable();
            $table->string('doc_childrenbarredlist')->nullable();
            $table->string('doc_adultbarredlist')->nullable();
            $table->string('doc_pastconviction')->nullable();
            $table->string('reference1_name')->nullable();
            $table->string('reference1_jobtitle')->nullable();
            $table->string('reference1_address')->nullable();
            $table->string('reference1_phoneno')->nullable();
            $table->string('reference1_email')->nullable();
            $table->string('reference1_refrelation')->nullable();
            $table->string('reference2_name')->nullable();
            $table->string('reference2_jobtitle')->nullable();
            $table->string('reference2_address')->nullable();
            $table->string('reference2_phoneno')->nullable();
            $table->string('reference2_email')->nullable();
            $table->string('reference2_refrelation')->nullable();
            $table->string('education_academicqualification')->nullable();
            $table->string('education_othertrainings')->nullable();
            $table->string('emphistory_nameaddress')->nullable();
            $table->string('emphistory_dateemployedfrom')->nullable();
            $table->string('emphistory_dateemployedto')->nullable();
            $table->string('emphistory_jobtitle')->nullable();
            $table->string('emphistory_jobdescription')->nullable();
            $table->string('emphistory_reasonofleaving')->nullable();
            $table->string('emphistory_annualsalary')->nullable();
            $table->string('emphistory_periodofnotice')->nullable();
            $table->string('emphistory_workhistory')->nullable();
            $table->string('emphistory_workgapreason')->nullable();
            $table->string('suitability')->nullable();
            $table->string('wmwa_interests')->nullable();
            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applicationforms');
    }
}
