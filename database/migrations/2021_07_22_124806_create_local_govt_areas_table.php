<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalGovtAreasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_govt_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('description')->nullable();
            $table->integer('senatorial_zone_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned();
            $table->integer('status')->default(1);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('senatorial_zone_id')->references('id')->on('senatorial_zones');
            //$table->foreign('state_id')->references('id')->on('states');
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
        Schema::drop('local_govt_areas');
    }
}
