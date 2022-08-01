<?php

$factory->define(App\City::class, function (Faker\Generator $faker) {
    return [
        "city" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
