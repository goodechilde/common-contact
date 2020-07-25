<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\CommonContact\Models\Address::class, function (Faker $faker) {
    return [
        'contact_type' => \Goodechilde\CommonContact\Models\ContactType::inRandomOrder()->whereType('address')->first(),
        'line1' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'country' => $faker->countryISOAlpha3,
        'zip' => $faker->postcode
    ];
});
