<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQualificationTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->integer('status')->default(1);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('qualification_types');
    }
}
