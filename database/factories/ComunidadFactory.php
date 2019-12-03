<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comunidad;
use Faker\Generator as Faker;

$factory->define(Comunidad::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(50),
    ];
});
