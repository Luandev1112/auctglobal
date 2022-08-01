<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TemplateTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateTemplate()
    {
        $admin = \App\User::find(1);
        $template = factory('App\Template')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $template) {
            $browser->loginAs($admin)
                ->visit(route('admin.templates.index'))
                ->clickLink('Add new')
                ->type("key", $template->key)
                ->select("type", $template->type)
                ->type("subject", $template->subject)
                ->type("from_email", $template->from_email)
                ->type("from_name", $template->from_name)
                ->type("content", $template->content)
                ->press('Save')
                ->assertRouteIs('admin.templates.index')
                ->assertSeeIn("tr:last-child td[field-key='key']", $template->key)
                ->assertSeeIn("tr:last-child td[field-key='type']", $template->type)
                ->assertSeeIn("tr:last-child td[field-key='subject']", $template->subject)
                ->assertSeeIn("tr:last-child td[field-key='from_email']", $template->from_email)
                ->assertSeeIn("tr:last-child td[field-key='from_name']", $template->from_name)
                ->assertSeeIn("tr:last-child td[field-key='content']", $template->content);
        });
    }

    public function testEditTemplate()
    {
        $admin = \App\User::find(1);
        $template = factory('App\Template')->create();
        $template2 = factory('App\Template')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $template, $template2) {
            $browser->loginAs($admin)
                ->visit(route('admin.templates.index'))
                ->click('tr[data-entry-id="' . $template->id . '"] .btn-info')
                ->type("key", $template2->key)
                ->select("type", $template2->type)
                ->type("subject", $template2->subject)
                ->type("from_email", $template2->from_email)
                ->type("from_name", $template2->from_name)
                ->type("content", $template2->content)
                ->press('Update')
                ->assertRouteIs('admin.templates.index')
                ->assertSeeIn("tr:last-child td[field-key='key']", $template2->key)
                ->assertSeeIn("tr:last-child td[field-key='type']", $template2->type)
                ->assertSeeIn("tr:last-child td[field-key='subject']", $template2->subject)
                ->assertSeeIn("tr:last-child td[field-key='from_email']", $template2->from_email)
                ->assertSeeIn("tr:last-child td[field-key='from_name']", $template2->from_name)
                ->assertSeeIn("tr:last-child td[field-key='content']", $template2->content);
        });
    }

    public function testShowTemplate()
    {
        $admin = \App\User::find(1);
        $template = factory('App\Template')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $template) {
            $browser->loginAs($admin)
                ->visit(route('admin.templates.index'))
                ->click('tr[data-entry-id="' . $template->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='key']", $template->key)
                ->assertSeeIn("td[field-key='type']", $template->type)
                ->assertSeeIn("td[field-key='subject']", $template->subject)
                ->assertSeeIn("td[field-key='from_email']", $template->from_email)
                ->assertSeeIn("td[field-key='from_name']", $template->from_name)
                ->assertSeeIn("td[field-key='content']", $template->content)
                ->assertSeeIn("td[field-key='created_by']", $template->created_by->name);
        });
    }

}
