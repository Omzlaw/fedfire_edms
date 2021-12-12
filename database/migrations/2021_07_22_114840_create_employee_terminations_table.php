<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('termination_id');
            $table->integer('employee_id');
            $table->string('file_upload')->nullable();
            $table->date('even_date');
            $table->integer('is_pensionable')->default(0);
            $table->decimal('pension_amount',30,2)->default(0);
            $table->date('pension_start_date');
            $table->decimal('gratuity_amount',30,2)->default(0);
            $table->string('contract_gratuity');
            $table->decimal('estate_gratuity_amount_paid',30,2);
            $table->decimal('widow_pension_amount',30,2)->default(0);
            $table->date('widow_pension_start_date');
            $table->decimal('orphan_pension_amonut',30,2)->default(0);
            $table->integer('nigeria_total_service_years');
            $table->integer('nigeria_total_service_months');
            $table->integer('nigeria_total_service_days');
            $table->decimal('total_naria_salary',30,2);
            $table->string('summary')->nullable();
            $table->string('remark')->nullable();
            $table->integer('status')->default(1);
            $table->integer('compiled_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('termination_id')->references('id')->on('termination_types');
            //$table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('compiled_by')->references('id')->on('users');
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
        Schema::drop('employee_terminations');
    }
}
