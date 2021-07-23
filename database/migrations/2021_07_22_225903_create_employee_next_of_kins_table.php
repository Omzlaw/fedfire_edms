<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeNextOfKinsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_next_of_kins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('relationship_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->string('remark')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('relationship_id')->references('id')->on('relationships');
            //$table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::drop('employee_next_of_kins');
    }
}
