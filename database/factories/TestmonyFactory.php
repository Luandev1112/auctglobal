<?php

$factory->define(App\Testmony::class, function (Faker\Generator $faker) {
    return [
        "user_id" => factory('App\User')->create(),
        "testmony" => $faker->name,
        "status" => collect(["Active","Inactive",])->random(),
        "created_by_id" => factory('App\User')->create(),
    ];
});
