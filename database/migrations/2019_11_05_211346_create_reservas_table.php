<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sala_id')
            ->references('id')->on('salas')
            ->onDelete('cascade');
            $table->integer('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade')->nullable();
            //$table->date('data');--> Desativada em prol de finalizar a funcionalidade de horas em antemão
            $table->string('hora');//de timestamp para varchar
            $table->boolean('ocupado');
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
        Schema::dropIfExists('reservas');
    }
}
