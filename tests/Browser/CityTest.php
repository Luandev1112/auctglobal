<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CityTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateCity()
    {
        $admin = \App\User::find(1);
        $city = factory('App\City')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $city) {
            $browser->loginAs($admin)
                ->visit(route('admin.cities.index'))
                ->clickLink('Add new')
                ->type("city", $city->city)
                ->press('Save')
                ->assertRouteIs('admin.cities.index')
                ->assertSeeIn("tr:last-child td[field-key='city']", $city->city);
        });
    }

    public function testEditCity()
    {
        $admin = \App\User::find(1);
        $city = factory('App\City')->create();
        $city2 = factory('App\City')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $city, $city2) {
            $browser->loginAs($admin)
                ->visit(route('admin.cities.index'))
                ->click('tr[data-entry-id="' . $city->id . '"] .btn-info')
                ->type("city", $city2->city)
                ->press('Update')
                ->assertRouteIs('admin.cities.index')
                ->assertSeeIn("tr:last-child td[field-key='city']", $city2->city);
        });
    }

    public function testShowCity()
    {
        $admin = \App\User::find(1);
        $city = factory('App\City')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $city) {
            $browser->loginAs($admin)
                ->visit(route('admin.cities.index'))
                ->click('tr[data-entry-id="' . $city->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='city']", $city->city)
                ->assertSeeIn("td[field-key='created_by']", $city->created_by->name);
        });
    }

}
