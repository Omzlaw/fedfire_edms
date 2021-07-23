<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeLocalLeavesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_local_leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('no_of_days');
            $table->integer('file_page_no');
            $table->integer('leaver_id')->unsigned();
            $table->dateTime('from_date');
            $table->integer('to_date');
            $table->smallInteger('status');
            $table->text('remark');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('leaver_id')->references('id')->on('leave_types');
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
        Schema::drop('employee_local_leaves');
    }
}
