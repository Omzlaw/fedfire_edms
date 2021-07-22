<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeForceServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_force_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area_of_service');
            $table->string('service_no');
            $table->string('last_unit');
            $table->string('reason_for_leaving');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->string('remark');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->dateTime('date_updated');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::drop('employee_force_services');
    }
}