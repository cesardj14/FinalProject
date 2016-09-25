<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 45);
            $table->text('description');
            $table->string('images', 45);
            $table->integer('nro_tickets');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->timestamps();
            $table->enum('status');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('Usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
