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
            $table->string('name_events_type');
            $table->foreign('name_events_type')->references('name')->('events_type');
            $table->string('title', 45);
            $table->text('description');
            $table->string('images', 45);
            $table->integer('nro_tickets');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->timestamps();
            $table->enum('status',['m']);
            $table->integer('user_id');/*->unsigned();*/
            $table->foreign('user_id')->references('id')->on('users');
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
