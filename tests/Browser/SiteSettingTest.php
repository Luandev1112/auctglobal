<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SiteSettingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateSiteSetting()
    {
        $admin = \App\User::find(1);
        $site_setting = factory('App\SiteSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $site_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.site_settings.index'))
                ->clickLink('Add new')
                ->type("site_title", $site_setting->site_title)
                ->type("admin_email", $site_setting->admin_email)
                ->type("your_copyright_message", $site_setting->your_copyright_message)
                ->type("delete_auctions_older_than", $site_setting->delete_auctions_older_than)
                ->type("results_shown_per_page", $site_setting->results_shown_per_page)
                ->radio("users_confirmation_method", $site_setting->users_confirmation_method)
                ->type("default_country", $site_setting->default_country)
                ->type("default_language", $site_setting->default_language)
                ->press('Save')
                ->assertRouteIs('admin.site_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='site_title']", $site_setting->site_title)
                ->assertSeeIn("tr:last-child td[field-key='admin_email']", $site_setting->admin_email)
                ->assertSeeIn("tr:last-child td[field-key='your_copyright_message']", $site_setting->your_copyright_message)
                ->assertSeeIn("tr:last-child td[field-key='delete_auctions_older_than']", $site_setting->delete_auctions_older_than)
                ->assertSeeIn("tr:last-child td[field-key='results_shown_per_page']", $site_setting->results_shown_per_page)
                ->assertSeeIn("tr:last-child td[field-key='users_confirmation_method']", $site_setting->users_confirmation_method)
                ->assertSeeIn("tr:last-child td[field-key='default_country']", $site_setting->default_country)
                ->assertSeeIn("tr:last-child td[field-key='default_language']", $site_setting->default_language);
        });
    }

    public function testEditSiteSetting()
    {
        $admin = \App\User::find(1);
        $site_setting = factory('App\SiteSetting')->create();
        $site_setting2 = factory('App\SiteSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $site_setting, $site_setting2) {
            $browser->loginAs($admin)
                ->visit(route('admin.site_settings.index'))
                ->click('tr[data-entry-id="' . $site_setting->id . '"] .btn-info')
                ->type("site_title", $site_setting2->site_title)
                ->type("admin_email", $site_setting2->admin_email)
                ->type("your_copyright_message", $site_setting2->your_copyright_message)
                ->type("delete_auctions_older_than", $site_setting2->delete_auctions_older_than)
                ->type("results_shown_per_page", $site_setting2->results_shown_per_page)
                ->radio("users_confirmation_method", $site_setting2->users_confirmation_method)
                ->type("default_country", $site_setting2->default_country)
                ->type("default_language", $site_setting2->default_language)
                ->press('Update')
                ->assertRouteIs('admin.site_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='site_title']", $site_setting2->site_title)
                ->assertSeeIn("tr:last-child td[field-key='admin_email']", $site_setting2->admin_email)
                ->assertSeeIn("tr:last-child td[field-key='your_copyright_message']", $site_setting2->your_copyright_message)
                ->assertSeeIn("tr:last-child td[field-key='delete_auctions_older_than']", $site_setting2->delete_auctions_older_than)
                ->assertSeeIn("tr:last-child td[field-key='results_shown_per_page']", $site_setting2->results_shown_per_page)
                ->assertSeeIn("tr:last-child td[field-key='users_confirmation_method']", $site_setting2->users_confirmation_method)
                ->assertSeeIn("tr:last-child td[field-key='default_country']", $site_setting2->default_country)
                ->assertSeeIn("tr:last-child td[field-key='default_language']", $site_setting2->default_language);
        });
    }

    public function testShowSiteSetting()
    {
        $admin = \App\User::find(1);
        $site_setting = factory('App\SiteSetting')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $site_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.site_settings.index'))
                ->click('tr[data-entry-id="' . $site_setting->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='site_title']", $site_setting->site_title)
                ->assertSeeIn("td[field-key='admin_email']", $site_setting->admin_email)
                ->assertSeeIn("td[field-key='your_copyright_message']", $site_setting->your_copyright_message)
                ->assertSeeIn("td[field-key='delete_auctions_older_than']", $site_setting->delete_auctions_older_than)
                ->assertSeeIn("td[field-key='created_by']", $site_setting->created_by->name)
                ->assertSeeIn("td[field-key='results_shown_per_page']", $site_setting->results_shown_per_page)
                ->assertSeeIn("td[field-key='users_confirmation_method']", $site_setting->users_confirmation_method)
                ->assertSeeIn("td[field-key='default_country']", $site_setting->default_country)
                ->assertSeeIn("td[field-key='default_language']", $site_setting->default_language);
        });
    }

}
