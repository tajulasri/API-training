<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id' => null,
        'name' => $faker->sentence,
        'description' => $faker->sentence,
        'price_per_unit' => $faker->randomFloat(2, 100, 1000),
    ];
});
