<?php

$factory->define(App\CreateLetter::class, function (Faker\Generator $faker) {
    return [
        "to" => collect(["All","Bidders","Sellers","Subscribers",])->random(),
        "title" => $faker->name,
        "message" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
