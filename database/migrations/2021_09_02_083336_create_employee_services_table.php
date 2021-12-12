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
            // $table->increments('id');
            // $table->integer('employee_id');
            // $table->integer('present_department');
            // $table->string('present_station')->nullable();
            // $table->string('state');
            // $table->integer('zone');
            // $table->string('location');
            // $table->integer('region')->nullable();
            // $table->integer('status')->default(1)->nullable();
            // $table->integer('created_by')->nullable();
            // $table->integer('updated_by')->nullable();
            // $table->timestamps();
            // $table->softDeletes();
            $table->increments('id');
            $table->integer('employee_id');
            $table->string('present_department')->nullable();
            $table->string('present_station')->nullable();
            $table->string('state')->nullable();
            $table->string('zone')->nullable();
            $table->string('location')->nullable();
            $table->string('region')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
