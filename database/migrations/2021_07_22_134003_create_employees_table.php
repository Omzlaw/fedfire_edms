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
            // $table->string('service_number')->unique();
            $table->string('service_number')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->integer('religion')->nullable();
            $table->string('staff_code')->nullable();
            $table->integer('gender');
            $table->date('date_of_birth')->nullable()->default(null);
            $table->string('place_of_birth')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('marital_status_id')->nullable();
            // $table->integer('present_department');
            // $table->integer('present_station');
            // $table->integer('state');
            // $table->integer('zone');
            // $table->integer('location');
            $table->integer('gl');
            $table->integer('type_of_appointment')->nullable();
            $table->date('date_of_first_appointment')->nullable()->default(null);
            $table->date('assumption_of_duty_date')->nullable();
            $table->date('date_of_present_appointment')->nullable()->default(null);
            $table->date('date_of_confirmation')->nullable();
            $table->date('first_arrival_date')->nullable();
            $table->integer('nationality')->default(160)->nullable();
            $table->integer('geo_political_zone')->nullable();
            $table->integer('state_of_origin')->nullable();
            $table->integer('senatorial_zone')->nullable();
            $table->integer('local_govt_area')->nullable();
            $table->string('decorations')->nullable();
            $table->string('file_upload')->nullable();
            $table->text('remark')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('current_rank')->nullable();
            $table->string('entry_qualification')->nullable();
            $table->string('additional_qualification')->nullable();
            $table->string('current_appointment')->nullable();
            // $table->date('retirement_date_by_dob')->nullable();
            // $table->integer('retirement_year_by_dob')->nullable();
            // $table->integer('no_of_years_remained_by_dob')->nullable();
            // $table->date('retirement_date_by_dofa')->nullable();
            // $table->integer('no_of_years_remained_by_dofa')->nullable();
            $table->integer('IPPIS')->nullable();
            $table->string('cadre')->nullable();
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
