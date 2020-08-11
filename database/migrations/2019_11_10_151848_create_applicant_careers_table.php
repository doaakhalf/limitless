<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('applicant_id')->unsigned();

            $table->bigInteger('career_id')->unsigned();
        
            $table->foreign('applicant_id')->references('id')->on('applicants')
        
                ->onDelete('cascade');
        
            $table->foreign('career_id')->references('id')->on('careers')
        
                ->onDelete('cascade');
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
        Schema::dropIfExists('applicant_careers');
    }
}
