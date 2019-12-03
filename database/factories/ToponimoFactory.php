<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Toponimo;
use Faker\Generator as Faker;

$factory->define(Toponimo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
        'id_provincia' => $faker->randomDigitNot(0)
    ];
});
