<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeGratuitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_gratuities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload');
            $table->integer('file_page_no');
            $table->dateTime('payment_date');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->integer('years');
            $table->integer('months');
            $table->integer('days');
            $table->integer('status');
            $table->decimal('rate_per_annum');
            $table->decimal('amount_paid');
            $table->string('remark');
            $table->integer('checked_by')->unsigned();
            $table->dateTime('checked_at');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employee_id')->references('id')->on('emoloyees');
            $table->foreign('checked_by')->references('id')->on('users');
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
        Schema::drop('employee_gratuities');
    }
}