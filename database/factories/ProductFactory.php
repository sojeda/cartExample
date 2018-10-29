<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2) ,
        'price' => $faker->numberBetween(1000, 10000),
        'image' => $faker->imageUrl($width = 72, $height = 72),
    ];
});
