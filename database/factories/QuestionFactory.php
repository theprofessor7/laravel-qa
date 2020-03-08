<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,10)), "."),
        'body' => $faker->paragraphs(rand(3,7), true),  // true to avoid arrays and have a string with newlines instead
        'views' => rand(0,10),
        'answers_count' => rand(0,10),
        'votes' => rand(-3, 10)
    ];
});
