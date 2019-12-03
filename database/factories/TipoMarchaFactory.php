<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tipo_marcha;
use Faker\Generator as Faker;

$factory->define(Tipo_marcha::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(50),
    ];
});
