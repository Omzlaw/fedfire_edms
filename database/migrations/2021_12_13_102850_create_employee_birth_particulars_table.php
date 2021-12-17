<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeBirthParticularsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_birth_particulars', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('home_place');
            $table->string('proof');
            $table->integer('checked_by');
            $table->integer('employee_id');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_birth_particulars');
    }
}
