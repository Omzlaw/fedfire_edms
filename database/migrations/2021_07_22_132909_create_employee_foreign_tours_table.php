<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeForeignToursTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_foreign_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->integer('leaver_id')->unsigned();
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->integer('status');
            $table->text('remark');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->dateTime('date_started');
            $table->integer('tour_gazette_no');
            $table->double('tour_length');
            $table->dateTime('leave_due_date');
            $table->dateTime('leave_departure_date');
            $table->integer('leave_gazette_no');
            $table->dateTime('return_due_date');
            $table->dateTime('granted_extension_date');
            $table->dateTime('duty_resumption_date');
            $table->text('passed_to_uk');
            $table->string('passed_from_uk');
            $table->integer('resident_months');
            $table->integer('resident_days');
            $table->integer('leave_months');
            $table->integer('leave_days');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('leaver_id')->references('id')->on('employee_local_leaves');
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
        Schema::drop('employee_foreign_tours');
    }
}
