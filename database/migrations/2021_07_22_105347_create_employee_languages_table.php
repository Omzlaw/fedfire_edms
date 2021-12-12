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
            $table->string('exam_qualified')->nullable();
            $table->integer('employee_id');
            $table->integer('language_id');
            $table->string('file_upload')->nullable()->nullable();
            $table->smallInteger('status')->default(1);
            $table->text('remark')->nullable();
            $table->integer('checked_by')->nullable();
            $table->date('checked_at');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
             //$table->foreign('language_id')->references('id')->on('languages');
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
