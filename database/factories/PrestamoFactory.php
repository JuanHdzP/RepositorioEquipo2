<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prestamo;
use App\User;
use Faker\Generator as Faker;

$factory->define(Prestamo::class, function (Faker $faker) {
    return [
        //
        'fecha_prestamo'=> $faker->dateTimeBetween('+1 week', '+1 month'),
        'fecha_devolucion'=> $faker->dateTimeBetween('+1 week', '+1 month'),
        'costo'=> $faker->randomDigit,
        'user_id'=> User::all()->random()->id    
    ];
});
