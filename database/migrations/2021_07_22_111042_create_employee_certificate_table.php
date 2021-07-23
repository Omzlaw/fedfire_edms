<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeCertificateTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_certificate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('certificate_name');
            $table->integer('date_obtained');
            $table->integer('employee_id')->unsigned();
            $table->integer('status')->default(1);
            $table->string('remark')->nullable();
            $table->integer('checked_by')->unsigned();
            $table->integer('checked_at');
            $table->integer('updated_by')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('created_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('checked_by')->references('id')->on('Users');
            //$table->foreign('updated_by')->references('id')->on('users');
            //$table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_certificate');
    }
}
