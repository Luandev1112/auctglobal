<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TimeSettingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateTimeSetting()
    {
        $admin = \App\User::find(1);
        $time_setting = factory('App\TimeSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $time_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.time_settings.index'))
                ->clickLink('Add new')
                ->radio("date_format", $time_setting->date_format)
                ->type("time_zone", $time_setting->time_zone)
                ->press('Save')
                ->assertRouteIs('admin.time_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='date_format']", $time_setting->date_format)
                ->assertSeeIn("tr:last-child td[field-key='time_zone']", $time_setting->time_zone);
        });
    }

    public function testEditTimeSetting()
    {
        $admin = \App\User::find(1);
        $time_setting = factory('App\TimeSetting')->create();
        $time_setting2 = factory('App\TimeSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $time_setting, $time_setting2) {
            $browser->loginAs($admin)
                ->visit(route('admin.time_settings.index'))
                ->click('tr[data-entry-id="' . $time_setting->id . '"] .btn-info')
                ->radio("date_format", $time_setting2->date_format)
                ->type("time_zone", $time_setting2->time_zone)
                ->press('Update')
                ->assertRouteIs('admin.time_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='date_format']", $time_setting2->date_format)
                ->assertSeeIn("tr:last-child td[field-key='time_zone']", $time_setting2->time_zone);
        });
    }

    public function testShowTimeSetting()
    {
        $admin = \App\User::find(1);
        $time_setting = factory('App\TimeSetting')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $time_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.time_settings.index'))
                ->click('tr[data-entry-id="' . $time_setting->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='date_format']", $time_setting->date_format)
                ->assertSeeIn("td[field-key='time_zone']", $time_setting->time_zone)
                ->assertSeeIn("td[field-key='created_by']", $time_setting->created_by->name);
        });
    }

}
