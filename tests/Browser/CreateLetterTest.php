<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CreateLetterTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateCreateLetter()
    {
        $admin = \App\User::find(1);
        $create_letter = factory('App\CreateLetter')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $create_letter) {
            $browser->loginAs($admin)
                ->visit(route('admin.create_letters.index'))
                ->clickLink('Add new')
                ->select("to", $create_letter->to)
                ->type("title", $create_letter->title)
                ->type("message", $create_letter->message)
                ->press('Save')
                ->assertRouteIs('admin.create_letters.index')
                ->assertSeeIn("tr:last-child td[field-key='to']", $create_letter->to)
                ->assertSeeIn("tr:last-child td[field-key='title']", $create_letter->title)
                ->assertSeeIn("tr:last-child td[field-key='message']", $create_letter->message);
        });
    }

    public function testEditCreateLetter()
    {
        $admin = \App\User::find(1);
        $create_letter = factory('App\CreateLetter')->create();
        $create_letter2 = factory('App\CreateLetter')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $create_letter, $create_letter2) {
            $browser->loginAs($admin)
                ->visit(route('admin.create_letters.index'))
                ->click('tr[data-entry-id="' . $create_letter->id . '"] .btn-info')
                ->select("to", $create_letter2->to)
                ->type("title", $create_letter2->title)
                ->type("message", $create_letter2->message)
                ->press('Update')
                ->assertRouteIs('admin.create_letters.index')
                ->assertSeeIn("tr:last-child td[field-key='to']", $create_letter2->to)
                ->assertSeeIn("tr:last-child td[field-key='title']", $create_letter2->title)
                ->assertSeeIn("tr:last-child td[field-key='message']", $create_letter2->message);
        });
    }

    public function testShowCreateLetter()
    {
        $admin = \App\User::find(1);
        $create_letter = factory('App\CreateLetter')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $create_letter) {
            $browser->loginAs($admin)
                ->visit(route('admin.create_letters.index'))
                ->click('tr[data-entry-id="' . $create_letter->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='to']", $create_letter->to)
                ->assertSeeIn("td[field-key='title']", $create_letter->title)
                ->assertSeeIn("td[field-key='message']", $create_letter->message)
                ->assertSeeIn("td[field-key='created_by']", $create_letter->created_by->name);
        });
    }

}
