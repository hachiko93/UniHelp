<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('description');
            $table->char('category');
            $table->string('location');
            $table->integer('partic_number');
            $table->integer('partic_id')->unsigned();
            $table->foreign('partic_id')->references('user_id')->on('users');
            $table->integer('org_id')->unsigned();
            $table->foreign('org_id')->references('user_id')->on('users');
            $table->string('reward');
            $table->integer('exps');
            $table->integer('expc');
            $table->integer('expo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
