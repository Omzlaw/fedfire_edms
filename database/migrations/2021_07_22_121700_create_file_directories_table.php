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
            $table->json('file_upload');
            $table->integer('file_type_id');
            $table->json('file_url');
            $table->integer('employee_id');
            $table->integer('status')->default(1);
            $table->string('remark')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('file_type_id')->references('id')->on('file_types');
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
        Schema::drop('file_directories');
    }
}
