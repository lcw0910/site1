<?php

//use Faker\Generator as Faker;
use Faker\Factory as Faker;

$factory->define(App\Shop::class, function () {

    $faker = Faker::create('ko_KR');

    return [
        'shop_name' => $faker->company,
        'mall_id' => $faker->unique()->userName,
        'shop_no' => $faker->numberBetween(0, 7),
        'domain' => $faker->domainName,
        'admin_email' => $faker->safeEmail,
        'language_code' => $faker->languageCode,
        'use_promotion' => $faker->numberBetween(0, 1),
        'use_calculate' => $faker->numberBetween(0, 1)
    ];
});
