<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValorantPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valorant_players', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('valorants')->onDelete('cascade');

            $table->string('name');
            $table->string('nick');
            $table->string('tagline');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('id_line')->nullable();
            $table->enum('role', ['ketua', 'member', 'cadangan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valorant_players');
    }
}
