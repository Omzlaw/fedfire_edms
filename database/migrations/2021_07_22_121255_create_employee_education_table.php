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
            $table->integer('qualification_type_id')->unsigned();
            $table->string('school_name');
            $table->integer('certificate_id')->unsigned()->nullable();
            $table->integer('school_type_id')->unsigned()->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->string('remark')->nullable();
            $table->integer('checked_by')->unsigned()->nullable();
            $table->date('checked_at')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('certificate_id')->references('id')->on('employee_certificate');
            //$table->foreign('school_type_id')->references('id')->on('school_types');
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('checked_by')->references('id')->on('users');
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
        Schema::drop('employee_education');
    }
}
