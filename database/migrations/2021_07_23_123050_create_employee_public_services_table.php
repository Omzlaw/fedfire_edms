<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePublicServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_public_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer_name');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('file_page_ref');
            $table->integer('employee_id')->unsigned();
            $table->string('file_upload')->nullable();
            $table->integer('total_years_served');
            $table->decimal('total_paid')->default(0);
            $table->text('remark')->nullable();
            $table->integer('checked_by')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('employee_public_services');
    }
}
