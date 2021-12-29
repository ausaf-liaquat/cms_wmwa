<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToWorkbookResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workbook_responses', function (Blueprint $table) {
            $table->unsignedBigInteger('detailquest_id')->nullable();
            $table->foreign('detailquest_id')->references('id')->on('detailquests')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workbook_responses', function (Blueprint $table) {
            //
        });
    }
}
