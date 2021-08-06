<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeRecommendationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_recommendations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('summary');
            $table->date('date_received');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('status')->default(1);
            $table->string('remark')->nullable();
            $table->integer('compiled_by')->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            // //$table->foreign('employee_id')->references('id')->on('employees');
            // //$table->foreign('compiled_by')->references('id')->on('users');
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
        Schema::drop('employee_recommendations');
    }
}
