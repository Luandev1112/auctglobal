<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CurrencySettingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateCurrencySetting()
    {
        $admin = \App\User::find(1);
        $currency_setting = factory('App\CurrencySetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $currency_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.currency_settings.index'))
                ->clickLink('Add new')
                ->type("site_currency", $currency_setting->site_currency)
                ->radio("money_format", $currency_setting->money_format)
                ->type("decimal_digits", $currency_setting->decimal_digits)
                ->radio("symbol_position", $currency_setting->symbol_position)
                ->press('Save')
                ->assertRouteIs('admin.currency_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='site_currency']", $currency_setting->site_currency)
                ->assertSeeIn("tr:last-child td[field-key='money_format']", $currency_setting->money_format)
                ->assertSeeIn("tr:last-child td[field-key='decimal_digits']", $currency_setting->decimal_digits)
                ->assertSeeIn("tr:last-child td[field-key='symbol_position']", $currency_setting->symbol_position);
        });
    }

    public function testEditCurrencySetting()
    {
        $admin = \App\User::find(1);
        $currency_setting = factory('App\CurrencySetting')->create();
        $currency_setting2 = factory('App\CurrencySetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $currency_setting, $currency_setting2) {
            $browser->loginAs($admin)
                ->visit(route('admin.currency_settings.index'))
                ->click('tr[data-entry-id="' . $currency_setting->id . '"] .btn-info')
                ->type("site_currency", $currency_setting2->site_currency)
                ->radio("money_format", $currency_setting2->money_format)
                ->type("decimal_digits", $currency_setting2->decimal_digits)
                ->radio("symbol_position", $currency_setting2->symbol_position)
                ->press('Update')
                ->assertRouteIs('admin.currency_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='site_currency']", $currency_setting2->site_currency)
                ->assertSeeIn("tr:last-child td[field-key='money_format']", $currency_setting2->money_format)
                ->assertSeeIn("tr:last-child td[field-key='decimal_digits']", $currency_setting2->decimal_digits)
                ->assertSeeIn("tr:last-child td[field-key='symbol_position']", $currency_setting2->symbol_position);
        });
    }

    public function testShowCurrencySetting()
    {
        $admin = \App\User::find(1);
        $currency_setting = factory('App\CurrencySetting')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $currency_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.currency_settings.index'))
                ->click('tr[data-entry-id="' . $currency_setting->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='site_currency']", $currency_setting->site_currency)
                ->assertSeeIn("td[field-key='money_format']", $currency_setting->money_format)
                ->assertSeeIn("td[field-key='decimal_digits']", $currency_setting->decimal_digits)
                ->assertSeeIn("td[field-key='symbol_position']", $currency_setting->symbol_position)
                ->assertSeeIn("td[field-key='created_by']", $currency_setting->created_by->name);
        });
    }

}
