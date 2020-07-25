<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Goodechilde\CommonContact\Models\EmailAddress::class, function (Faker $faker) {
    return [
        'contact_type' =>
            \Goodechilde\CommonContact\Models\ContactType::inRandomOrder()->whereType('emailaddress')->first(),
        'email_address' => $faker->safeEmail,
    ];
});
