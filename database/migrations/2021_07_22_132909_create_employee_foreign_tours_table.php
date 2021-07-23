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
            $table->string('file_upload')->nullable();
            $table->integer('leaver_id')->unsigned();
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->integer('status')->default(1);
            $table->text('remark')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->dateTime('date_started')->nullable();
            $table->integer('tour_gazette_no')->nullable();
            $table->double('tour_length')->nullable();
            $table->dateTime('leave_due_date')->nullable();
            $table->dateTime('leave_departure_date')->nullable();
            $table->integer('leave_gazette_no')->nullable();
            $table->dateTime('return_due_date')->nullable();
            $table->dateTime('granted_extension_date')->nullable();
            $table->dateTime('duty_resumption_date')->nullable();
            $table->text('passed_to_uk')->nullable();
            $table->string('passed_from_uk')->nullable();
            $table->integer('resident_months')->nullable();
            $table->integer('resident_days')->nullable();
            $table->integer('leave_months')->nullable();
            $table->integer('leave_days')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('leaver_id')->references('id')->on('employee_local_leaves');
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
        Schema::drop('employee_foreign_tours');
    }
}
