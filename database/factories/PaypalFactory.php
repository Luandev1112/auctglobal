<?php

$factory->define(App\Paypal::class, function (Faker\Generator $faker) {
    return [
        "is_enabled" => collect(["enable","disable",])->random(),
        "paypal_email_address" => $faker->safeEmail,
        "mode" => collect(["sandbox","live",])->random(),
        "created_by_id" => factory('App\User')->create(),
    ];
});
