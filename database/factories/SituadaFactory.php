<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Situada;
use Faker\Generator as Faker;

$factory->define(Situada::class, function (Faker $faker) {
    return [
        'id_provincia' => $faker->randomDigitNot(0),
        'id_zona' => $faker->randomDigitNot(0)
    ];
});
