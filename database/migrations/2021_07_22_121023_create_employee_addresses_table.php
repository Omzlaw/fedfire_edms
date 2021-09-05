<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeAddressesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->integer('address_type')->unsigned(); 
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('local_govt_area_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->text('remark')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('state_id')->references('id')->on('states');
            //$table->foreign('local_govt_area_id')->references('id')->on('local_govt_areas');
            //$table->foreign('country_id')->references('id')->on('countries');
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
        Schema::drop('employee_addresses');
    }
}
