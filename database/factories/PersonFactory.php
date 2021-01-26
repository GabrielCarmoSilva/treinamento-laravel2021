<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;
use Faker\Factory;

$factory->define(Person::class, function (Faker $faker) {
    $faker = Factory::create('pt_BR');
    return [
        'name' => $faker->name,
        'age' => $faker->numerify('##'),
        'profession' => $faker->word,
    ];
});
