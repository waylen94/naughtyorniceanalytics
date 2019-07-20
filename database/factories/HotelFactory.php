<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Hotel::class, function (Faker $faker) {

    return [
        'name' => $faker->streetName,
        'star' => $faker->numberBetween(3,5),
        'room_number' => $faker->numberBetween(300,500),
        'description' => $faker->text(),
        'location' => "Brisbane",
        
    ];
});
