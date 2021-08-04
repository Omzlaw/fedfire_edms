<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_no');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('staff_code');
            $table->integer('gender');
            $table->dateTime('birthdate');
            $table->string('place_of_birth');
            $table->string('profile_picture')->nullable();
            $table->integer('marital_status_id')->unsigned();
            $table->dateTime('first_appointment_date');
            $table->dateTime('first_arrival_date');
            $table->integer('nationality')->unsigned();
            $table->integer('geo_political_zone')->unsigned()->nullable();
            $table->integer('state_of_origin')->unsigned()->nullable();
            $table->integer('senatorial_zone')->unsigned()->nullable();
            $table->integer('local_govt_area')->unsigned()->nullable();
            $table->string('decorations')->nullable();
            $table->string('file_upload')->nullable();
            $table->text('remark')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->integer('status')->default(1);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->string('current_appointment');
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('birth_certificate_upload')->references('id')->on('employee_certificates');
            //$table->foreign('marital_status_id')->references('id')->on('marital_status');
            //$table->foreign('nationality')->references('id')->on('countries');
            //$table->foreign('geo_political_zone')->references('id')->on('geo_political_zones');
            //$table->foreign('state_of_origin')->references('id')->on('states');
            //$table->foreign('senatorial_zone')->references('id')->on('senatorial_zones');
            //$table->foreign('local_govt_area')->references('id')->on('local_govt_areas');
            //$table->foreign('created_by')->references('id')->on('users');
            //$table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
