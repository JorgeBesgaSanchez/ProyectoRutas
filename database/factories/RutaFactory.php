<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ruta;
use Faker\Generator as Faker;

$factory->define(Ruta::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(3),
        'desnivel' => $faker->randomNumber(4),
        'sugerencias' => $faker->sentence(6),
        'cartografia' =>$faker->sentence(2),
        'id_camino' => $faker->randomDigitNot(0),
        'id_dificultad' => $faker->randomDigitNot(0),
        'id_zona' => $faker->randomDigitNot(0),
        'id_actividad' => $faker->randomDigitNot(0),
        'fecha' => $faker->date(),

    ];
});
