<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('present_department');
            $table->string('present_station')->nullable();
            $table->string('state');
            $table->integer('zone');
            $table->string('location');
            $table->integer('region')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('state')->references('id')->on('states');
            // $table->foreign('region')->references('id')->on('geo_political_zones');
            // $table->foreign('created_by')->references('id')->on('users');
            // $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_services');
    }
}
