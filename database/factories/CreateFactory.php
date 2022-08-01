<?php

$factory->define(App\Create::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "category_id" => factory('App\Category')->create(),
        "sub_category_id" => factory('App\SubCatogory')->create(),
        "description" => $faker->name,
        "start_date" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "end_date" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "minimum_bid" => $faker->randomNumber(2),
        "reserve_price" => $faker->randomNumber(2),
        "buy_now_price" => $faker->randomNumber(2),
        "bid_increment" => $faker->randomNumber(2),
        "shipping_conditions" => collect(["buyer","seller",])->random(),
        "international_shipping" => 0,
        "shipping_terms" => $faker->name,
        "make_featured" => 0,
        "status" => collect(["new","open","suspended","closed",])->random(),
        "created_by_id" => factory('App\User')->create(),
        "user_id" => factory('App\User')->create(),
    ];
});
