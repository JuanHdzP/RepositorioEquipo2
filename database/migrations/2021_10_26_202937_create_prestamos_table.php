<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->decimal('costo');
            //Declaracion de llaves foraneas
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');   
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
        Schema::dropIfExists('prestamos');
    }
}
