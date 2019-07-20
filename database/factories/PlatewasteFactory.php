<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Platewaste;
use Faker\Generator as Faker;

$factory->define(Platewaste::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween('-3 days','now'),
        'weight_kg' => $faker->numberBetween(100,500),
        'people' => $faker->numberBetween(30,50),
        'type' => "1",
    ];
});
