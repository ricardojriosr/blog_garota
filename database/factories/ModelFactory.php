<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\User;
use Faker\Generator;

$factory->define(User::class, function(Generator $faker) {
    $array = [
        'name'      =>  $faker->name,
        'email'     =>  $faker->email,
        'password'  =>  bcrypt('carlos')
    ];
    return $array;
});

/*
$factory->define(App\User::class, function ( $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/