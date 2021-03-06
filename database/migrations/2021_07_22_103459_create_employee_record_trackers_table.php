<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeRecordTrackersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_record_trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('status')->default(1);
            $table->string('remark')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('has_profile');
            $table->integer('has_education');
            $table->timestamps();
            $table->softDeletes();
            // //$table->foreign('employee_id')->references('id')->on('employees');
            // //$table->foreign('created_by')->references('id')->on('users');
            // //$table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_record_trackers');
    }
}
