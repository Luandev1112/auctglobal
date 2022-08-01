<?php

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        "category" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
