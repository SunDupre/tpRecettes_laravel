<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recette;
use Faker\Generator as Faker;

$factory->define(Recette::class, function (Faker $faker) {
    return [
        "titre" => $faker->text(70),
        "ingredients" => $faker->sentences(1, true),
        "duree" => $faker->numberBetween(10, 120),
        "cuisson" => $faker->numberBetween(20, 45),
        "difficulte" => $faker->numberBetween(1, 5),
        "description" => $faker->numberBetween(3, true)
        
    ];
});
