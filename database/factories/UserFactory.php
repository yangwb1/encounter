<?php

//use Faker\Generator as Faker;
//
//$factory->define(App\Models\User::class, function (Faker $faker) {
//    $date_time = $faker->date . ' ' . $faker->time;
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->safeEmail,
//        'is_admin' => false,
//        'activated' => true,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//        'created_at' => $date_time,
//        'updated_at' => $date_time,
//    ];
//});

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;
    $now = Carbon::now()->toDateTimeString();

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
        'introduction' => $faker->sentence(),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});