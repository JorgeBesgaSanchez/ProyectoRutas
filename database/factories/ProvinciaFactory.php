<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Provincia;
use Faker\Generator as Faker;

$factory->define(Provincia::class, function (Faker $faker) {
    return [
        'id_provincia' => $faker->randomDigitNot(0),
        'nombre' => $faker->text(10),
        'id_comunidad' => $faker->randomDigitNot(0),
    ];
});
