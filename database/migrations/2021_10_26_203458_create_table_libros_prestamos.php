<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLibrosPrestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_libros_prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Declaracion de llaves foraneas
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->unsignedBigInteger('prestamo_id');
            $table->foreign('prestamo_id')->references('id')->on('prestamos')->onDelete('cascade');
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
        Schema::dropIfExists('table_libros_prestamos');
    }
}
