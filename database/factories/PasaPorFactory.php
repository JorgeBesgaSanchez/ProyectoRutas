<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PasaPor;
use Faker\Generator as Faker;

$factory->define(PasaPor::class, function (Faker $faker) {
    return [
        'id_ruta' => $faker->randomDigitNot(0),
        'id_toponimo' => $faker->randomDigitNot(0),
    ];
});
