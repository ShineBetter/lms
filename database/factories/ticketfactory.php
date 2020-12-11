<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ticket;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'status' => 1,
        'date' => now(), // password
        'sender_id' => 2,
        'receiver_id' => 4,
    ];
});
