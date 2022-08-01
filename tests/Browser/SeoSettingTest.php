<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SeoSettingTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateSeoSetting()
    {
        $admin = \App\User::find(1);
        $seo_setting = factory('App\SeoSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $seo_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.seo_settings.index'))
                ->clickLink('Add new')
                ->type("meta_description_tag", $seo_setting->meta_description_tag)
                ->type("meta_keywords_tag", $seo_setting->meta_keywords_tag)
                ->press('Save')
                ->assertRouteIs('admin.seo_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='meta_description_tag']", $seo_setting->meta_description_tag)
                ->assertSeeIn("tr:last-child td[field-key='meta_keywords_tag']", $seo_setting->meta_keywords_tag);
        });
    }

    public function testEditSeoSetting()
    {
        $admin = \App\User::find(1);
        $seo_setting = factory('App\SeoSetting')->create();
        $seo_setting2 = factory('App\SeoSetting')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $seo_setting, $seo_setting2) {
            $browser->loginAs($admin)
                ->visit(route('admin.seo_settings.index'))
                ->click('tr[data-entry-id="' . $seo_setting->id . '"] .btn-info')
                ->type("meta_description_tag", $seo_setting2->meta_description_tag)
                ->type("meta_keywords_tag", $seo_setting2->meta_keywords_tag)
                ->press('Update')
                ->assertRouteIs('admin.seo_settings.index')
                ->assertSeeIn("tr:last-child td[field-key='meta_description_tag']", $seo_setting2->meta_description_tag)
                ->assertSeeIn("tr:last-child td[field-key='meta_keywords_tag']", $seo_setting2->meta_keywords_tag);
        });
    }

    public function testShowSeoSetting()
    {
        $admin = \App\User::find(1);
        $seo_setting = factory('App\SeoSetting')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $seo_setting) {
            $browser->loginAs($admin)
                ->visit(route('admin.seo_settings.index'))
                ->click('tr[data-entry-id="' . $seo_setting->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='meta_description_tag']", $seo_setting->meta_description_tag)
                ->assertSeeIn("td[field-key='meta_keywords_tag']", $seo_setting->meta_keywords_tag)
                ->assertSeeIn("td[field-key='created_by']", $seo_setting->created_by->name);
        });
    }

}
