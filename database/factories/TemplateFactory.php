<?php

$factory->define(App\Template::class, function (Faker\Generator $faker) {
    return [
        "key" => $faker->name,
        "type" => collect(["Content","Header","Footer",])->random(),
        "subject" => $faker->name,
        "from_email" => $faker->name,
        "from_name" => $faker->name,
        "content" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
