<?php

$factory->define(App\SocialLogin::class, function (Faker\Generator $faker) {
    return [
        "facebook_client_id" => $faker->name,
        "facebook_client_secret" => $faker->name,
        "facebook_redirect_url" => $faker->name,
        "facebook_login_enable" => collect(["Yes","No",])->random(),
        "google_client_id" => $faker->name,
        "google_client_secret" => $faker->name,
        "google_redirect_url" => $faker->name,
        "google_login_enable" => collect(["Yes","No",])->random(),
        "created_by_id" => factory('App\User')->create(),
    ];
});
