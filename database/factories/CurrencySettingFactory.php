<?php

$factory->define(App\CurrencySetting::class, function (Faker\Generator $faker) {
    return [
        "site_currency" => $faker->name,
        "money_format" => collect(["before","after",])->random(),
        "decimal_digits" => $faker->randomNumber(2),
        "symbol_position" => collect(["before","after",])->random(),
        "created_by_id" => factory('App\User')->create(),
    ];
});
