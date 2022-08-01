<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CategoryTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateCategory()
    {
        $admin = \App\User::find(1);
        $category = factory('App\Category')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $category) {
            $browser->loginAs($admin)
                ->visit(route('admin.categories.index'))
                ->clickLink('Add new')
                ->type("category", $category->category)
                ->press('Save')
                ->assertRouteIs('admin.categories.index')
                ->assertSeeIn("tr:last-child td[field-key='category']", $category->category);
        });
    }

    public function testEditCategory()
    {
        $admin = \App\User::find(1);
        $category = factory('App\Category')->create();
        $category2 = factory('App\Category')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $category, $category2) {
            $browser->loginAs($admin)
                ->visit(route('admin.categories.index'))
                ->click('tr[data-entry-id="' . $category->id . '"] .btn-info')
                ->type("category", $category2->category)
                ->press('Update')
                ->assertRouteIs('admin.categories.index')
                ->assertSeeIn("tr:last-child td[field-key='category']", $category2->category);
        });
    }

    public function testShowCategory()
    {
        $admin = \App\User::find(1);
        $category = factory('App\Category')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $category) {
            $browser->loginAs($admin)
                ->visit(route('admin.categories.index'))
                ->click('tr[data-entry-id="' . $category->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='category']", $category->category)
                ->assertSeeIn("td[field-key='created_by']", $category->created_by->name);
        });
    }

}
