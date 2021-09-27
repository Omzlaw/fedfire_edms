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
            $table->integer('rank_type_id');
            $table->integer('employee_id');
            $table->integer('status')->default(1)->nullable();
            $table->integer('type')->nullable();
            $table->integer('employee_gender')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
