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
            $table->integer('employee_id');
            $table->string('file_upload')->nullable();
            $table->integer('no_of_days');
            $table->integer('file_page_no');
            $table->integer('leave_type_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->smallInteger('status');
            $table->text('remark');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('leave_type_id')->references('id')->on('leave_types');
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
