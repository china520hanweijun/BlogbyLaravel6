<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'alias' => $faker->word,
        'description' => $faker->sentence(5, true),

    ];
});
