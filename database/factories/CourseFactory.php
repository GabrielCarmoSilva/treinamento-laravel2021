<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Course;
use Faker\Generator as Faker;
use Faker\Factory;

$factory->define(Course::class, function (Faker $faker) {
    $faker = Factory::create('pt_BR');

    $categories_id = Category::all()->pluck('id')->toArray();
    $key_random = array_rand($categories_id);
    return [
        'name' => $faker->word,
        'hours' => $faker->time('H'),
        'category_id' => $categories_id[$key_random],
    ];
});
