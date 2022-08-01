<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class PaypalTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreatePaypal()
    {
        $admin = \App\User::find(1);
        $paypal = factory('App\Paypal')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $paypal) {
            $browser->loginAs($admin)
                ->visit(route('admin.paypals.index'))
                ->clickLink('Add new')
                ->radio("is_enabled", $paypal->is_enabled)
                ->type("paypal_email_address", $paypal->paypal_email_address)
                ->select("mode", $paypal->mode)
                ->press('Save')
                ->assertRouteIs('admin.paypals.index')
                ->assertSeeIn("tr:last-child td[field-key='is_enabled']", $paypal->is_enabled)
                ->assertSeeIn("tr:last-child td[field-key='paypal_email_address']", $paypal->paypal_email_address)
                ->assertSeeIn("tr:last-child td[field-key='mode']", $paypal->mode);
        });
    }

    public function testEditPaypal()
    {
        $admin = \App\User::find(1);
        $paypal = factory('App\Paypal')->create();
        $paypal2 = factory('App\Paypal')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $paypal, $paypal2) {
            $browser->loginAs($admin)
                ->visit(route('admin.paypals.index'))
                ->click('tr[data-entry-id="' . $paypal->id . '"] .btn-info')
                ->radio("is_enabled", $paypal2->is_enabled)
                ->type("paypal_email_address", $paypal2->paypal_email_address)
                ->select("mode", $paypal2->mode)
                ->press('Update')
                ->assertRouteIs('admin.paypals.index')
                ->assertSeeIn("tr:last-child td[field-key='is_enabled']", $paypal2->is_enabled)
                ->assertSeeIn("tr:last-child td[field-key='paypal_email_address']", $paypal2->paypal_email_address)
                ->assertSeeIn("tr:last-child td[field-key='mode']", $paypal2->mode);
        });
    }

    public function testShowPaypal()
    {
        $admin = \App\User::find(1);
        $paypal = factory('App\Paypal')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $paypal) {
            $browser->loginAs($admin)
                ->visit(route('admin.paypals.index'))
                ->click('tr[data-entry-id="' . $paypal->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='is_enabled']", $paypal->is_enabled)
                ->assertSeeIn("td[field-key='paypal_email_address']", $paypal->paypal_email_address)
                ->assertSeeIn("td[field-key='mode']", $paypal->mode)
                ->assertSeeIn("td[field-key='created_by']", $paypal->created_by->name);
        });
    }

}
