<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use App\Editorial;
use App\Tema;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'titulo'=> $faker->word,
        'autor'=> $faker->word,
        'descripcion'=> $faker->sentence(1),
        'img'=> ($faker->word . '.jpg'),
        'existencias'=> $faker->numerify('###'),        
        'editorial_id'=> Editorial::all()->random()->id,
        'tema_id'=> Tema::all()->random()->id
    ];
});
