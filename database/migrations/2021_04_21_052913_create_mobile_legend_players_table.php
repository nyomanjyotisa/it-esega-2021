<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileLegendPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_legend_players', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('mobile_legends')->onDelete('cascade');

            $table->string('name');
            $table->string('nick');
            $table->string('id_server');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('id_line')->nullable();
            $table->enum('role', ['ketua', 'member', 'cadangan']);
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobile_legend_players');
    }
}
