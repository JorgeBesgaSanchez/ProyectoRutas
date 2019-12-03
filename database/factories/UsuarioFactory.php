<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name(),
        'email' => $faker->email(),
        'contraseña' => bcrypt('secreto'),
    ];
});
