<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'reserved_date' => $faker->date(),
        'reserved_time' => $faker->time(),
        'message' => Str::random(100),
    ];
});
