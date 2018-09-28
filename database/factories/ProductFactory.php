<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'description' => $faker->sentence,
        'price' => $faker->randomNumber(3),
        'category_id' => function() {
            return factory(\App\Category::class)->create()->id;
        }
    ];
});
