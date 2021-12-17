<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeServiceRecordTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_service_record', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_entry_made');
            $table->string('detail');
            $table->integer('certified_by');
            $table->integer('employee_id');
            $table->integer('status');
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
        Schema::drop('employee_service_record');
    }
}
