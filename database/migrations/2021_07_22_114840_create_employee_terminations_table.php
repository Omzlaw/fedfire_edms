<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeTerminationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_terminations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('termination_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->dateTime('even_date');
            $table->integer('is_pensionable');
            $table->decimal('pension_amount');
            $table->dateTime('pension_start_date');
            $table->decimal('gratuity_amount');
            $table->string('contract_gratuity');
            $table->decimal('estate_gratuity_amount_paid');
            $table->decimal('widow_pension_amount');
            $table->dateTime('widow_pension_start_date');
            $table->decimal('orphan_pension_amonut');
            $table->integer('nigeria_total_service_years');
            $table->integer('nigeria_total_service_months');
            $table->integer('nigeria_total_service_days');
            $table->decimal('total_naria_salary');
            $table->string('summary');
            $table->string('remark');
            $table->integer('status');
            $table->integer('compiled_by')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('termination_id')->references('id')->on('employee_terminations');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('compiled_by')->references('id')->on('users');
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
        Schema::drop('employee_terminations');
    }
}
