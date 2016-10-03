<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSuscrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripciones', function(Blueprint $table){
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suscripciones');
    }
}
