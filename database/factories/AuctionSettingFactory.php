<?php

$factory->define(App\AuctionSetting::class, function (Faker\Generator $faker) {
    return [
        "allow_custom_increments" => collect(["Yes","No",])->random(),
        "hours_until_auction_ends_count_down" => $faker->randomNumber(2),
        "enable_featured_items" => collect(["Yes","No",])->random(),
        "enable_auctions_auto_extension" => collect(["Yes","No",])->random(),
        "extend_auction_by" => $faker->randomNumber(2),
        "during_the_last" => $faker->randomNumber(2),
        "activate_picture_gallery" => collect(["Yes","No",])->random(),
        "max_number_of_pictures" => $faker->randomNumber(2),
        "max_pictures_size" => $faker->randomNumber(2),
        "thumbnails_size" => $faker->randomNumber(2),
        "created_by_id" => factory('App\User')->create(),
        "bidder_privacy" => collect(["Yes","No",])->random(),
    ];
});
