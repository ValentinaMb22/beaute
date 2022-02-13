<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('servicio_id')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sala_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onUpdate("cascade")->onDelete("cascade");
            $table->foreign('sala_id')->references('id')->on('salas')->onUpdate("cascade")->onDelete("cascade");
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
