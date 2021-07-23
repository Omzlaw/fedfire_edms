<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeLanguagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('speaking_fluency');
            $table->integer('writing_fluency');
            $table->string('exam_qualified');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->smallInteger('status');
            $table->text('remark');
            $table->integer('checked_by')->unsigned();
            $table->dateTime('checked_at');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
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
        Schema::drop('employee_languages');
    }
}
