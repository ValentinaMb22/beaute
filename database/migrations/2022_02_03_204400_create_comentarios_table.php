<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('sala_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->text('comentario');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('sala_id')->references('id')->on('salas')->onUpdate("cascade")->onDelete("cascade");
            $table->foreign('user_id')->references('id')->on('users')->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
