<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;
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

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'staff_name' => $faker->name,
        'staff_email' => $faker->unique()->safeEmail,
        'staff_phone' => $faker->unique()->phoneNumber,
        'staff_added_by' => 'mig',
    ];
});
