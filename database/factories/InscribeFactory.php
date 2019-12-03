<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Inscribe;
use Faker\Generator as Faker;

$factory->define(Inscribe::class, function (Faker $faker) {
    return [
        'id_actividad' => $faker-> randomDigitNot(0),
        'id_usuario' => $faker-> randomDigitNot(0),
        'fecha_y_hora' => $faker->dateTime()
    ];
});
