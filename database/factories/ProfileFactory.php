<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\profile;
use App\User;
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

$factory->define(profile::class, function (Faker $faker) {
    return [
        'name' => Str::random(5),
        'lastName' => Str::random(5),
        'parent_name' => Str::random(5),
        'nationalNumber' => $faker->randomDigit,
        'phone' => $faker->randomDigit,
        'mobile' => $faker->randomDigit,
        'date_of_birth' => $faker->randomDigit,
        'address' => $faker->text(),
        'photo' => $faker->text(),
    ];
});
