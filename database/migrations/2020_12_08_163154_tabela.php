<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabela', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('team');
            $table->string('points');
            $table->string('matches');
            $table->string('goalsfor');
            $table->string('goalsagainst');
            $table->string('wins');
            $table->string('draws');
            $table->string('losses');
        });    }
    

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
