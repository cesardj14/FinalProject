<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_type', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('Usuarios');
            $table->integer('provider_user_id');
            $table->string('provider', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
