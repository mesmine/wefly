<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('heure');
            $table->string('numero')->unique();
            $table->string('nomPassager');
            $table->string('telephonePassager')->unique();
            $table->enum('etat',['annule','confirme']);

            $table->bigInteger('volId')->unsigned();
            $table->foreign('volId')
                ->references('id')
                ->on('vols')
                ->onDelete('cascade');
            $table->bigInteger('clientId')->unsigned();
            $table->foreign('clientId')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');

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
        Schema::dropIfExists('reservations');
    }
}
