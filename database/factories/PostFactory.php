<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    static $index = 0;
    $index += 1;
    return [

        'user_id' => 1,

        'text' => $faker->sentences(3),

        'created_at' => $faker->dateTime,

        'updated_at' => $faker->dateTime,

    ];
});

