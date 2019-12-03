<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_camino;
use Faker\Generator as Faker;

$factory->define(Tipo_camino::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(50),
    ];
});
