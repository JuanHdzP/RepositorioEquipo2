<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use App\Editorial;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        //
        'titulo'=> $faker->sentence,
        'autor'=> $faker->sentence,
        'descripcion'=> $faker->paragraph(2),
        'img'=> $faker->imageUrl($width = 640, $height = 480),
        'existencias'=> $faker->sentence,        
        'editorial_id'=> Editorial::all()->random()->id
    ];
});
