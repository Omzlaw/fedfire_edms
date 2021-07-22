<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeWivesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_wives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wife_name');
            $table->dateTime('wife_birthdate');
            $table->dateTime('marriage_date');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->string('remark');
            $table->string('checked_by')->unsigned();
            $table->string('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('employee_wives');
    }
}