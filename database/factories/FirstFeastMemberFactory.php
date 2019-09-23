<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FirstFeastMember;
use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;

$factory->define(FirstFeastMember::class, function (Faker $faker) {

  $ru_faker = FakerFactory::create('ru_RU');
  $phone = [];
  for ($i=0; $i <= 10; $i++) {
    $phone[] = $faker->randomDigit;
  }

    return [
      'first_name' => $ru_faker->firstNameMale,
      'last_name' => $ru_faker->lastName,
      'email' => $ru_faker->unique()->safeEmail,
      'phone' => implode($phone),
      'education_level_id' => $faker->randomElement([1, 2, 3]),
      'ip' => $faker->ipv4,
      'created_at' => $faker->dateTime(),
    ];
});
