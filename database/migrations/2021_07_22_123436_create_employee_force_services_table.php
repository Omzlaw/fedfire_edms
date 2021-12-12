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
            // $table->string('location');
            // $table->integer('department')->nullable();
            // $table->integer('zone')->nullable();
            // $table->integer('state')->nullable();
            // $table->integer('region')->nullable();
            $table->string('service_no');
            $table->string('last_unit');
            $table->string('reason_for_leaving')->nullable();
            $table->integer('employee_id');
            $table->string('file_upload')->nullable();
            $table->string('remark')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->date('date_updated')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::drop('employee_force_services');
    }
}
