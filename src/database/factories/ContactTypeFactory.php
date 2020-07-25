<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\CommonContact\Models\ContactType::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['phone','address','emailaddress','socialmediaaddress']),
        'name' => $faker->words(2, true)
    ];
});
