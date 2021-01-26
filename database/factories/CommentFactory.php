<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'content' => $faker->text(190),
        'user_id' => $faker->randomDigitNotNull,
        'article_id' => $faker->randomDigitNotNull,
        'parent_id' => $faker->randomDigitNotNull,
    ];
});
