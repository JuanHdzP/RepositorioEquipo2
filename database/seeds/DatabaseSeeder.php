<?php

use Illuminate\Database\Seeder;
//Llamamos a nuestro modelo
use App\Editorial;
use App\Libro;
use App\Prestamo;
use App\Tema;
use App\User;
use Illuminate\Support\Facades\BD;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Definimos la cantidad de registros que vamos a ingresar en la BD
        //$cantidadTags=200;
        //$cantidadImages=200;
        //Hacemos la llamada a nuestro factory de tags y utilizamos el metodo create para insertar la cantidad de datos a nuestra BD
        factory(User::class,20)->create();
        factory(Tema::class,200)->create();
        factory(Editorial::class,200)->create();
        factory(Libro::class,200)->create();
        factory(Prestamo::class,200)->create();
                // $this->call(UsersTableSeeder::class);
    }
}
