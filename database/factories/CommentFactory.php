<?php

use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    $user = factory(\App\User::class)->create();
    return [
        'body' => $faker->text,
        'user_id' => $user->id,
    ];
});
