<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeEmolumentRecordsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_emolument_records', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_entry_made');
            $table->integer('salary_scale');
            $table->decimal('basic_salary_pa');
            $table->decimal('inducement_pay_pa');
            $table->integer('employee_id');
            $table->date('increment_date');
            $table->string('authority');
            $table->integer('certified_by');
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
        Schema::drop('employee_emolument_records');
    }
}
