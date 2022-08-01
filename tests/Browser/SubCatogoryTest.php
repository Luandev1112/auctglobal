<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SubCatogoryTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateSubCatogory()
    {
        $admin = \App\User::find(1);
        $sub_catogory = factory('App\SubCatogory')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $sub_catogory) {
            $browser->loginAs($admin)
                ->visit(route('admin.sub_catogories.index'))
                ->clickLink('Add new')
                ->select("category_id", $sub_catogory->category_id)
                ->type("sub_category", $sub_catogory->sub_category)
                ->press('Save')
                ->assertRouteIs('admin.sub_catogories.index')
                ->assertSeeIn("tr:last-child td[field-key='category']", $sub_catogory->category->category)
                ->assertSeeIn("tr:last-child td[field-key='sub_category']", $sub_catogory->sub_category);
        });
    }

    public function testEditSubCatogory()
    {
        $admin = \App\User::find(1);
        $sub_catogory = factory('App\SubCatogory')->create();
        $sub_catogory2 = factory('App\SubCatogory')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $sub_catogory, $sub_catogory2) {
            $browser->loginAs($admin)
                ->visit(route('admin.sub_catogories.index'))
                ->click('tr[data-entry-id="' . $sub_catogory->id . '"] .btn-info')
                ->select("category_id", $sub_catogory2->category_id)
                ->type("sub_category", $sub_catogory2->sub_category)
                ->press('Update')
                ->assertRouteIs('admin.sub_catogories.index')
                ->assertSeeIn("tr:last-child td[field-key='category']", $sub_catogory2->category->category)
                ->assertSeeIn("tr:last-child td[field-key='sub_category']", $sub_catogory2->sub_category);
        });
    }

    public function testShowSubCatogory()
    {
        $admin = \App\User::find(1);
        $sub_catogory = factory('App\SubCatogory')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $sub_catogory) {
            $browser->loginAs($admin)
                ->visit(route('admin.sub_catogories.index'))
                ->click('tr[data-entry-id="' . $sub_catogory->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='category']", $sub_catogory->category->category)
                ->assertSeeIn("td[field-key='sub_category']", $sub_catogory->sub_category)
                ->assertSeeIn("td[field-key='created_by']", $sub_catogory->created_by->name);
        });
    }

}
