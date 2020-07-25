<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\CommonContact\Models\SocialMediaAddress::class, function (Faker $faker) {
    return [
        'contact_type' =>
            \Goodechilde\CommonContact\Models\ContactType::inRandomOrder()->whereType('socialmediaaddress')->first(),
        'handle' => $faker->word,
    ];
});
