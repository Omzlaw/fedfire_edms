<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeEducationTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->integer('certificate_id')->unsigned();
            $table->integer('school_type_id')->unsigned();
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->integer('status');
            $table->string('remark');
            $table->integer('checked_by')->unsigned();
            $table->dateTime('checked_at');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('certificate_id')->references('id')->on('employee_certificate');
            $table->foreign('school_type_id')->references('id')->on('school_types');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('checked_by')->references('id')->on('users');
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
        Schema::drop('employee_education');
    }
}