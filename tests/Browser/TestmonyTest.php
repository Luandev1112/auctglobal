<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TestmonyTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateTestmony()
    {
        $admin = \App\User::find(1);
        $testmony = factory('App\Testmony')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $testmony) {
            $browser->loginAs($admin)
                ->visit(route('admin.testmonies.index'))
                ->clickLink('Add new')
                ->select("user_id", $testmony->user_id)
                ->type("testmony", $testmony->testmony)
                ->select("status", $testmony->status)
                ->press('Save')
                ->assertRouteIs('admin.testmonies.index')
                ->assertSeeIn("tr:last-child td[field-key='user']", $testmony->user->name)
                ->assertSeeIn("tr:last-child td[field-key='testmony']", $testmony->testmony)
                ->assertSeeIn("tr:last-child td[field-key='status']", $testmony->status);
        });
    }

    public function testEditTestmony()
    {
        $admin = \App\User::find(1);
        $testmony = factory('App\Testmony')->create();
        $testmony2 = factory('App\Testmony')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $testmony, $testmony2) {
            $browser->loginAs($admin)
                ->visit(route('admin.testmonies.index'))
                ->click('tr[data-entry-id="' . $testmony->id . '"] .btn-info')
                ->select("user_id", $testmony2->user_id)
                ->type("testmony", $testmony2->testmony)
                ->select("status", $testmony2->status)
                ->press('Update')
                ->assertRouteIs('admin.testmonies.index')
                ->assertSeeIn("tr:last-child td[field-key='user']", $testmony2->user->name)
                ->assertSeeIn("tr:last-child td[field-key='testmony']", $testmony2->testmony)
                ->assertSeeIn("tr:last-child td[field-key='status']", $testmony2->status);
        });
    }

    public function testShowTestmony()
    {
        $admin = \App\User::find(1);
        $testmony = factory('App\Testmony')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $testmony) {
            $browser->loginAs($admin)
                ->visit(route('admin.testmonies.index'))
                ->click('tr[data-entry-id="' . $testmony->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='user']", $testmony->user->name)
                ->assertSeeIn("td[field-key='testmony']", $testmony->testmony)
                ->assertSeeIn("td[field-key='status']", $testmony->status)
                ->assertSeeIn("td[field-key='created_by']", $testmony->created_by->name);
        });
    }

}
