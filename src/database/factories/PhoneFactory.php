<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\CommonContact\Models\Phone::class, function (Faker $faker) {
    return [
        'contact_type' => \Goodechilde\CommonContact\Models\ContactType::inRandomOrder()->whereType('phone')->first(),
        'phone_number' => substr($faker->e164PhoneNumber, 1),
        'locale' => $faker->countryCode
    ];
});
