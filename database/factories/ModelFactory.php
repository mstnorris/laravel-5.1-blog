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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'facebook_username' => $faker->word,
        'twitter_username' => $faker->word,
        'instagram_username' => $faker->word
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1,50),
        'title' => $faker->realText(70),
        'body' => $faker->realText(1000, 3),
        'published_at' => $faker->dateTimeBetween('-1 year', '+1 month')->format('Y-m-d H:i:s')
    ];
});