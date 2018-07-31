<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory -> define(App\Department::class, function(Faker $faker)
{
    return[
        'name'=>$faker->sentence(10),
        'desc'=>$faker->sentence(20),
    ];
});
$factory -> define(App\Employees::class, function(Faker $faker)
{
    return[
        'first_name'=>$faker->sentence(10),
        'last_name'=>$faker->sentence(10),
        'gender'=>$faker->boolean(True),
        'skills'=>$faker->sentence(20),
        'profile_img'=>$faker->sentence(20),
        'department_id'=>$faker->boolean(true),


    ];
});

$factory -> define(App\Projects::class, function(Faker $faker)
{
    return[
        'name'=>$faker->sentence(10),
        'desc'=>$faker->sentence(10),
        'status'=>$faker->boolean(True),

        'document'=>$faker->sentence(20),
        'department_id'=>$faker->boolean(true),


    ];
});
$factory -> define(App\Tasks::class, function(Faker $faker)
{
    return[
        'name'=>$faker->sentence(10),
        'desc'=>$faker->sentence(10),
        'status'=>$faker->boolean(True),
        'privacy'=>$faker->boolean(True),
        'document'=>$faker->sentence(20),
        'progress'=>$faker->boolean(true),
        'employee_id'=>$faker->boolean(true),


    ];
});

