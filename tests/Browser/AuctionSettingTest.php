<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class AuctionSettingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateAuctionSetting()
    {
        $admin = \App\User::find(1);
        $auction_setting = factory('App\AuctionSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $auction_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.auction_settings.index'))
                ->clickLink('Add new')
                ->radio("allow_custom_increments", $auction_setting->allow_custom_increments)
                ->type("hours_until_auction_ends_count_down", $auction_setting->hours_until_auction_ends_count_down)
                ->radio("enable_featured_items", $auction_setting->enable_featured_items)
                ->radio("enable_auctions_auto_extension", $auction_setting->enable_auctions_auto_extension)
                ->type("extend_auction_by", $auction_setting->extend_auction_by)
                ->type("during_the_last", $auction_setting->during_the_last)
                ->radio("activate_picture_gallery", $auction_setting->activate_picture_gallery)
                ->type("max_number_of_pictures", $auction_setting->max_number_of_pictures)
                ->type("max_pictures_size", $auction_setting->max_pictures_size)
                ->type("thumbnails_size", $auction_setting->thumbnails_size)
                ->radio("bidder_privacy", $auction_setting->bidder_privacy)
                ->press('Save')
                ->assertRouteIs('admin.auction_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='allow_custom_increments']", $auction_setting->allow_custom_increments)
                ->assertSeeIn("tr:last-child td[field-key='hours_until_auction_ends_count_down']", $auction_setting->hours_until_auction_ends_count_down)
                ->assertSeeIn("tr:last-child td[field-key='enable_featured_items']", $auction_setting->enable_featured_items)
                ->assertSeeIn("tr:last-child td[field-key='enable_auctions_auto_extension']", $auction_setting->enable_auctions_auto_extension)
                ->assertSeeIn("tr:last-child td[field-key='extend_auction_by']", $auction_setting->extend_auction_by)
                ->assertSeeIn("tr:last-child td[field-key='during_the_last']", $auction_setting->during_the_last)
                ->assertSeeIn("tr:last-child td[field-key='activate_picture_gallery']", $auction_setting->activate_picture_gallery)
                ->assertSeeIn("tr:last-child td[field-key='max_number_of_pictures']", $auction_setting->max_number_of_pictures)
                ->assertSeeIn("tr:last-child td[field-key='max_pictures_size']", $auction_setting->max_pictures_size)
                ->assertSeeIn("tr:last-child td[field-key='thumbnails_size']", $auction_setting->thumbnails_size)
                ->assertSeeIn("tr:last-child td[field-key='bidder_privacy']", $auction_setting->bidder_privacy);
        });
    }

    public function testEditAuctionSetting()
    {
        $admin = \App\User::find(1);
        $auction_setting = factory('App\AuctionSetting')->create();
        $auction_setting2 = factory('App\AuctionSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $auction_setting, $auction_setting2) {
            $browser->loginAs($admin)
                ->visit(route('admin.auction_settings.index'))
                ->click('tr[data-entry-id="' . $auction_setting->id . '"] .btn-info')
                ->radio("allow_custom_increments", $auction_setting2->allow_custom_increments)
                ->type("hours_until_auction_ends_count_down", $auction_setting2->hours_until_auction_ends_count_down)
                ->radio("enable_featured_items", $auction_setting2->enable_featured_items)
                ->radio("enable_auctions_auto_extension", $auction_setting2->enable_auctions_auto_extension)
                ->type("extend_auction_by", $auction_setting2->extend_auction_by)
                ->type("during_the_last", $auction_setting2->during_the_last)
                ->radio("activate_picture_gallery", $auction_setting2->activate_picture_gallery)
                ->type("max_number_of_pictures", $auction_setting2->max_number_of_pictures)
                ->type("max_pictures_size", $auction_setting2->max_pictures_size)
                ->type("thumbnails_size", $auction_setting2->thumbnails_size)
                ->radio("bidder_privacy", $auction_setting2->bidder_privacy)
                ->press('Update')
                ->assertRouteIs('admin.auction_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='allow_custom_increments']", $auction_setting2->allow_custom_increments)
                ->assertSeeIn("tr:last-child td[field-key='hours_until_auction_ends_count_down']", $auction_setting2->hours_until_auction_ends_count_down)
                ->assertSeeIn("tr:last-child td[field-key='enable_featured_items']", $auction_setting2->enable_featured_items)
                ->assertSeeIn("tr:last-child td[field-key='enable_auctions_auto_extension']", $auction_setting2->enable_auctions_auto_extension)
                ->assertSeeIn("tr:last-child td[field-key='extend_auction_by']", $auction_setting2->extend_auction_by)
                ->assertSeeIn("tr:last-child td[field-key='during_the_last']", $auction_setting2->during_the_last)
                ->assertSeeIn("tr:last-child td[field-key='activate_picture_gallery']", $auction_setting2->activate_picture_gallery)
                ->assertSeeIn("tr:last-child td[field-key='max_number_of_pictures']", $auction_setting2->max_number_of_pictures)
                ->assertSeeIn("tr:last-child td[field-key='max_pictures_size']", $auction_setting2->max_pictures_size)
                ->assertSeeIn("tr:last-child td[field-key='thumbnails_size']", $auction_setting2->thumbnails_size)
                ->assertSeeIn("tr:last-child td[field-key='bidder_privacy']", $auction_setting2->bidder_privacy);
        });
    }

    public function testShowAuctionSetting()
    {
        $admin = \App\User::find(1);
        $auction_setting = factory('App\AuctionSetting')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $auction_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.auction_settings.index'))
                ->click('tr[data-entry-id="' . $auction_setting->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='allow_custom_increments']", $auction_setting->allow_custom_increments)
                ->assertSeeIn("td[field-key='hours_until_auction_ends_count_down']", $auction_setting->hours_until_auction_ends_count_down)
                ->assertSeeIn("td[field-key='enable_featured_items']", $auction_setting->enable_featured_items)
                ->assertSeeIn("td[field-key='enable_auctions_auto_extension']", $auction_setting->enable_auctions_auto_extension)
                ->assertSeeIn("td[field-key='extend_auction_by']", $auction_setting->extend_auction_by)
                ->assertSeeIn("td[field-key='during_the_last']", $auction_setting->during_the_last)
                ->assertSeeIn("td[field-key='activate_picture_gallery']", $auction_setting->activate_picture_gallery)
                ->assertSeeIn("td[field-key='max_number_of_pictures']", $auction_setting->max_number_of_pictures)
                ->assertSeeIn("td[field-key='max_pictures_size']", $auction_setting->max_pictures_size)
                ->assertSeeIn("td[field-key='thumbnails_size']", $auction_setting->thumbnails_size)
                ->assertSeeIn("td[field-key='created_by']", $auction_setting->created_by->name)
                ->assertSeeIn("td[field-key='bidder_privacy']", $auction_setting->bidder_privacy);
        });
    }

}
