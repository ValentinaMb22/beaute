 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  Schema::create('usuarios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombres',60);
            $table->string('apellidos',60);
            $table->string('foto')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('clave');
            $table->string('estado');
            $table->string('tipo');
            $table->rememberToken();
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
 