<?php

$factory->define(App\SubCatogory::class, function (Faker\Generator $faker) {
    return [
        "category_id" => factory('App\Category')->create(),
        "sub_category" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
