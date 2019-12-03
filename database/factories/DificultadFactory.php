<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Dificultad;
use Faker\Generator as Faker;

$factory->define(Dificultad::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(50),
    ];
});
