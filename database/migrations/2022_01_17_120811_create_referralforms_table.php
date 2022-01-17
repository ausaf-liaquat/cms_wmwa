<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referralforms', function (Blueprint $table) {
            $table->id();
            $table->string('referrer_name')->nullable();
            $table->string('referrer_organisation')->nullable();
            $table->string('referrer_jobtitle')->nullable();
            $table->string('referrer_phoneno')->nullable();
            $table->string('referrer_email')->nullable();
            $table->string('referrer_accommodation')->nullable();
            $table->string('referrer_consent')->nullable();
            $table->string('referrer_consentreason')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_dob')->nullable();
            $table->string('client_address')->nullable();
            $table->string('client_phoneno')->nullable();
            $table->string('client_phonecontact')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_emailcontact')->nullable();
            $table->string('client_preferred_contactmethod')->nullable();
            $table->string('client_safecontactnotes')->nullable();
            $table->string('client_gender')->nullable();
            $table->string('client_othergender')->nullable();
            $table->string('client_ethnicity')->nullable();
            $table->string('client_language')->nullable();
            $table->string('client_otherlanguage')->nullable();
            $table->string('client_disability')->nullable();
            $table->string('client_disabilitylist')->nullable();
            $table->string('client_additionalneeds')->nullable();
            $table->string('client_additionalneedslist')->nullable();
            $table->string('client_additionalneedsdetails')->nullable();
            $table->string('client_medicaltreatment')->nullable();
            $table->string('client_medicaltreatmentdetails')->nullable();
            $table->string('children_details')->nullable();
            $table->string('la_children_services')->nullable();
            $table->string('children_services_details')->nullable();
            $table->string('reason_for_referral')->nullable();
            $table->string('perpetrator_name')->nullable();
            $table->string('perpetrator_dob')->nullable();
            $table->string('perpetrator_address')->nullable();
            $table->string('perpetrator_relationship')->nullable();
            $table->string('perpetrator_livingwithreffered')->nullable();
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
        Schema::dropIfExists('referralforms');
    }
}
