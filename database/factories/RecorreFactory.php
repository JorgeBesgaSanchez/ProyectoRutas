<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Recorre;
use Faker\Generator as Faker;

$factory->define(Recorre::class, function (Faker $faker) {
    return [
        'id_ruta' => $faker->randomDigitNot(0),
        'id_camino' => $faker->randomDigitNot(0),
    ];
});
