<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->words(2, true),
        'content' => $faker->paragraphs(4, true),
        'user_id' => $faker->randomDigitNotNull,
    ];
});
