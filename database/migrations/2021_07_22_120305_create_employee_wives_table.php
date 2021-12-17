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
            $table->string('spouse_name');
            $table->date('spouse_birthdate');
            $table->date('marriage_date');
            $table->integer('employee_id');
            $table->string('file_upload')->nullable();
            $table->string('remark')->nullable();
            $table->integer('checked_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('employee_wives');
    }
}
