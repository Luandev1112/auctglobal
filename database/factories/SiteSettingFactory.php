<?php

$factory->define(App\SiteSetting::class, function (Faker\Generator $faker) {
    return [
        "site_title" => $faker->name,
        "admin_email" => $faker->safeEmail,
        "your_copyright_message" => $faker->name,
        "delete_auctions_older_than" => $faker->randomNumber(2),
        "created_by_id" => factory('App\User')->create(),
        "results_shown_per_page" => $faker->randomNumber(2),
        "users_confirmation_method" => collect(["admin","user","auto",])->random(),
        "default_country" => $faker->name,
        "default_language" => $faker->name,
    ];
});
