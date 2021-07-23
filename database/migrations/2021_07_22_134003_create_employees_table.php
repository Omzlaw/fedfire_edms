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
            $table->string('last_name');
            $table->integer('gender');
            $table->dateTime('birthdate');
            $table->string('place_of_birth');
            $table->string('birth_certificate_upload')->nullable();
            $table->integer('marital_status_id')->unsigned();
            $table->dateTime('first_appointment_date');
            $table->dateTime('first_arrival_date');
            $table->integer('nationality');
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
