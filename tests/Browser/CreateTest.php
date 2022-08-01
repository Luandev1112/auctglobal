<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CreateTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateCreate()
    {
        $admin = \App\User::find(1);
        $create = factory('App\Create')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $create) {
            $browser->loginAs($admin)
                ->visit(route('admin.creates.index'))
                ->clickLink('Add new')
                ->type("title", $create->title)
                ->select("category_id", $create->category_id)
                ->select("sub_category_id", $create->sub_category_id)
                ->type("description", $create->description)
                ->type("start_date", $create->start_date)
                ->type("end_date", $create->end_date)
                ->type("minimum_bid", $create->minimum_bid)
                ->type("reserve_price", $create->reserve_price)
                ->type("buy_now_price", $create->buy_now_price)
                ->type("bid_increment", $create->bid_increment)
                ->radio("shipping_conditions", $create->shipping_conditions)
                ->check("international_shipping")
                ->type("shipping_terms", $create->shipping_terms)
                ->check("make_featured")
                ->select("status", $create->status)
                ->select("user_id", $create->user_id)
                ->press('Save')
                ->assertRouteIs('admin.creates.index')
                ->assertSeeIn("tr:last-child td[field-key='title']", $create->title)
                ->assertSeeIn("tr:last-child td[field-key='category']", $create->category->category)
                ->assertSeeIn("tr:last-child td[field-key='sub_category']", $create->sub_category->sub_category)
                ->assertSeeIn("tr:last-child td[field-key='description']", $create->description)
                ->assertSeeIn("tr:last-child td[field-key='start_date']", $create->start_date)
                ->assertSeeIn("tr:last-child td[field-key='end_date']", $create->end_date)
                ->assertSeeIn("tr:last-child td[field-key='minimum_bid']", $create->minimum_bid)
                ->assertSeeIn("tr:last-child td[field-key='reserve_price']", $create->reserve_price)
                ->assertSeeIn("tr:last-child td[field-key='buy_now_price']", $create->buy_now_price)
                ->assertSeeIn("tr:last-child td[field-key='bid_increment']", $create->bid_increment)
                ->assertSeeIn("tr:last-child td[field-key='shipping_conditions']", $create->shipping_conditions)
                ->assertChecked("international_shipping")
                ->assertSeeIn("tr:last-child td[field-key='shipping_terms']", $create->shipping_terms)
                ->assertChecked("make_featured")
                ->assertSeeIn("tr:last-child td[field-key='status']", $create->status)
                ->assertSeeIn("tr:last-child td[field-key='user']", $create->user->name);
        });
    }

    public function testEditCreate()
    {
        $admin = \App\User::find(1);
        $create = factory('App\Create')->create();
        $create2 = factory('App\Create')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $create, $create2) {
            $browser->loginAs($admin)
                ->visit(route('admin.creates.index'))
                ->click('tr[data-entry-id="' . $create->id . '"] .btn-info')
                ->type("title", $create2->title)
                ->select("category_id", $create2->category_id)
                ->select("sub_category_id", $create2->sub_category_id)
                ->type("description", $create2->description)
                ->type("start_date", $create2->start_date)
                ->type("end_date", $create2->end_date)
                ->type("minimum_bid", $create2->minimum_bid)
                ->type("reserve_price", $create2->reserve_price)
                ->type("buy_now_price", $create2->buy_now_price)
                ->type("bid_increment", $create2->bid_increment)
                ->radio("shipping_conditions", $create2->shipping_conditions)
                ->check("international_shipping")
                ->type("shipping_terms", $create2->shipping_terms)
                ->check("make_featured")
                ->select("status", $create2->status)
                ->select("user_id", $create2->user_id)
                ->press('Update')
                ->assertRouteIs('admin.creates.index')
                ->assertSeeIn("tr:last-child td[field-key='title']", $create2->title)
                ->assertSeeIn("tr:last-child td[field-key='category']", $create2->category->category)
                ->assertSeeIn("tr:last-child td[field-key='sub_category']", $create2->sub_category->sub_category)
                ->assertSeeIn("tr:last-child td[field-key='description']", $create2->description)
                ->assertSeeIn("tr:last-child td[field-key='start_date']", $create2->start_date)
                ->assertSeeIn("tr:last-child td[field-key='end_date']", $create2->end_date)
                ->assertSeeIn("tr:last-child td[field-key='minimum_bid']", $create2->minimum_bid)
                ->assertSeeIn("tr:last-child td[field-key='reserve_price']", $create2->reserve_price)
                ->assertSeeIn("tr:last-child td[field-key='buy_now_price']", $create2->buy_now_price)
                ->assertSeeIn("tr:last-child td[field-key='bid_increment']", $create2->bid_increment)
                ->assertSeeIn("tr:last-child td[field-key='shipping_conditions']", $create2->shipping_conditions)
                ->assertChecked("international_shipping")
                ->assertSeeIn("tr:last-child td[field-key='shipping_terms']", $create2->shipping_terms)
                ->assertChecked("make_featured")
                ->assertSeeIn("tr:last-child td[field-key='status']", $create2->status)
                ->assertSeeIn("tr:last-child td[field-key='user']", $create2->user->name);
        });
    }

    public function testShowCreate()
    {
        $admin = \App\User::find(1);
        $create = factory('App\Create')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $create) {
            $browser->loginAs($admin)
                ->visit(route('admin.creates.index'))
                ->click('tr[data-entry-id="' . $create->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='title']", $create->title)
                ->assertSeeIn("td[field-key='category']", $create->category->category)
                ->assertSeeIn("td[field-key='sub_category']", $create->sub_category->sub_category)
                ->assertSeeIn("td[field-key='description']", $create->description)
                ->assertSeeIn("td[field-key='start_date']", $create->start_date)
                ->assertSeeIn("td[field-key='end_date']", $create->end_date)
                ->assertSeeIn("td[field-key='minimum_bid']", $create->minimum_bid)
                ->assertSeeIn("td[field-key='reserve_price']", $create->reserve_price)
                ->assertSeeIn("td[field-key='buy_now_price']", $create->buy_now_price)
                ->assertSeeIn("td[field-key='bid_increment']", $create->bid_increment)
                ->assertSeeIn("td[field-key='shipping_conditions']", $create->shipping_conditions)
                ->assertNotChecked("international_shipping")
                ->assertSeeIn("td[field-key='shipping_terms']", $create->shipping_terms)
                ->assertNotChecked("make_featured")
                ->assertSeeIn("td[field-key='status']", $create->status)
                ->assertSeeIn("td[field-key='created_by']", $create->created_by->name)
                ->assertSeeIn("td[field-key='user']", $create->user->name);
        });
    }

}
