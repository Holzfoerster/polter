<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    static $index = 0;
    $index += 1;
    return [

        'name' => $faker->colorName,

        'email' => $faker->unique()->safeEmail,

        'password' => bcrypt('123456'),

        'created_at' => $faker->dateTime,

        'updated_at' => $faker->dateTime,

    ];
});

