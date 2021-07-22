<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('gender');
            $table->dateTime('birthdate');
            $table->string('place_of_birth');
            $table->integer('birth_certificate_upload_id')->unsigned();
            $table->integer('marital_status_id')->unsigned();
            $table->dateTime('first_appointment_date');
            $table->dateTime('first_arrival_date');
            $table->string('nationality');
            $table->string('decorations');
            $table->string('file_upload');
            $table->text('remark');
            $table->string('email');
            $table->string('phone');
            $table->integer('status');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->string('current_appointment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('birth_certificate_upload_id')->references('id')->on('employee_certificates');
            $table->foreign('marital_status_id')->references('id')->on('marital_status');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_profiles');
    }
}
