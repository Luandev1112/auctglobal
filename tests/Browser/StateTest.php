<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class StateTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateState()
    {
        $admin = \App\User::find(1);
        $state = factory('App\State')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $state) {
            $browser->loginAs($admin)
                ->visit(route('admin.states.index'))
                ->clickLink('Add new')
                ->type("state", $state->state)
                ->press('Save')
                ->assertRouteIs('admin.states.index')
                ->assertSeeIn("tr:last-child td[field-key='state']", $state->state);
        });
    }

    public function testEditState()
    {
        $admin = \App\User::find(1);
        $state = factory('App\State')->create();
        $state2 = factory('App\State')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $state, $state2) {
            $browser->loginAs($admin)
                ->visit(route('admin.states.index'))
                ->click('tr[data-entry-id="' . $state->id . '"] .btn-info')
                ->type("state", $state2->state)
                ->press('Update')
                ->assertRouteIs('admin.states.index')
                ->assertSeeIn("tr:last-child td[field-key='state']", $state2->state);
        });
    }

    public function testShowState()
    {
        $admin = \App\User::find(1);
        $state = factory('App\State')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $state) {
            $browser->loginAs($admin)
                ->visit(route('admin.states.index'))
                ->click('tr[data-entry-id="' . $state->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='state']", $state->state)
                ->assertSeeIn("td[field-key='created_by']", $state->created_by->name);
        });
    }

}
