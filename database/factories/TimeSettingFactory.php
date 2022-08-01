<?php

$factory->define(App\TimeSetting::class, function (Faker\Generator $faker) {
    return [
        "date_format" => collect(["mm/dd/yyyy ","dd/mm/yyyy",])->random(),
        "time_zone" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
