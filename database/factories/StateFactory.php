<?php

$factory->define(App\State::class, function (Faker\Generator $faker) {
    return [
        "state" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
