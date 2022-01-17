<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestcdasServiceformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestcdas_serviceforms', function (Blueprint $table) {
            $table->id();
            $table->string('referrer_name')->nullable();
            $table->string('referrer_organisation')->nullable();
            $table->string('referrer_jobtitle')->nullable();
            $table->string('referrer_phoneno')->nullable();
            $table->string('referrer_email')->nullable();
            $table->string('referrer_consent')->nullable();
            $table->string('referrer_consentreason')->nullable();

            $table->string('contact_name')->nullable();
            $table->string('contact_phoneno')->nullable();
            $table->string('contact_text')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_time')->nullable();
            $table->string('contact_consent')->nullable();

            $table->string('client_name')->nullable();
            $table->string('client_dob')->nullable();
            $table->string('client_address')->nullable();
            $table->string('client_gender')->nullable();
            $table->string('client_othergender')->nullable();
            $table->string('client_ethnicity')->nullable();
            $table->string('client_language')->nullable();
            $table->string('client_otherlanguage')->nullable();
            $table->string('client_disability')->nullable();
            $table->string('client_disabilitylist')->nullable();
            $table->string('client_additionalneedsdetails')->nullable();
            $table->string('client_attending_education')->nullable();
            $table->string('client_attending_educationdetails')->nullable();
            $table->string('reason_for_referral')->nullable();
            $table->string('abusive_relationship')->nullable();
            $table->string('social_care')->nullable();
            $table->string('probation_marac_police')->nullable();
            $table->string('drive_programme')->nullable();
            $table->string('other_programme')->nullable();
            $table->string('outcomes')->nullable();
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
        Schema::dropIfExists('requestcdas_serviceforms');
    }
}
