<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeePublicServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_public_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer_name');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->string('file_page_ref');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->integer('total_years_served');
            $table->decimal('total_paid');
            $table->text('remark');
            $table->integer('checked_by')->unsigned();
            $table->integer('created_by')->unsigned();
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
        Schema::drop('employee_public_services');
    }
}
