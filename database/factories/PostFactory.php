<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'texto' => $faker->sentence(),
        'id_usuario' => $faker->randomDigitNot(0),
        'id_ruta' => $faker->randomDigitNot(0),
        'fecha_y_hora' => $faker->dateTime(),
    ];
});
