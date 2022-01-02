<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('workbook_id');
            $table->unsignedBigInteger('detailquest_id')->nullable();
            $table->string('answer')->nullable();
            $table->timestamps();
            
            $table->foreign('detailquest_id')->references('id')->on('detailquests')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('workbook_id')->references('id')->on('workbooks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
