<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeRanksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rank_type_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->integer('status')->default(1);
            $table->integer('type')->unsigned()->nullable();
            $table->integer('employee_gender')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('rank_type_id')->references('id')->on('rank_types');
            // $table->foreign('employee_id')->references('id')->on('employees');
            // $table->foreign('created_by')->references('id')->on('users');
            // $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_ranks');
    }
}
