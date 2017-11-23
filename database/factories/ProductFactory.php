<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'shop_idx' => function () {
            return factory(App\Shop::class)->create()->id;
        },
        'product_no' => $faker->numberBetween(1, 90000),
        'product_code' => $faker->swiftBicNumber,
        'product_name' => $faker->text(30),
        'description' => $faker->paragraph(4, true),
        'price_decimal' => $faker->randomFloat(2, 1, 9000000),
        'price_float' => $faker->randomFloat(2, 1, 9000000),
        'price_double' => $faker->randomFloat(2, 1, 9000000),
        'is_selling' => $faker->numberBetween(0, 1),
        'is_display' => $faker->numberBetween(0, 1),
        'created_at' => $faker->dateTime('now', date_default_timezone_get()),
        'updated_at' => $faker->dateTime('now', date_default_timezone_get())
    ];
});
