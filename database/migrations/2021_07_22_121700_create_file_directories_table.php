<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFileDirectoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_directories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_name');
            $table->integer('file_type_id')->unsigned();
            $table->string('file_ext');
            $table->integer('staff_no');
            $table->integer('status');
            $table->string('remark');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('file_type_id')->references('id')->on('file_types');
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
        Schema::drop('file_directories');
    }
}
