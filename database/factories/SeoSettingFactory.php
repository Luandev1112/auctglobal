<?php

$factory->define(App\SeoSetting::class, function (Faker\Generator $faker) {
    return [
        "meta_description_tag" => $faker->name,
        "meta_keywords_tag" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
