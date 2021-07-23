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
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('status')->default(1);
            $table->text('remark');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('state_id')->references('id')->on('states');
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
