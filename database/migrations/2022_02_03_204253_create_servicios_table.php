<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id()->unique();
            $table->bigInteger('sala_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->double('precio');
            $table->text('descripcion');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate("cascade")->onDelete("cascade");
            $table->foreign('sala_id')->references('id')->on('salas')->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
