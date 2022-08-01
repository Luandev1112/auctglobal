<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SocialLoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateSocialLogin()
    {
        $admin = \App\User::find(1);
        $social_login = factory('App\SocialLogin')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $social_login) {
            $browser->loginAs($admin)
                ->visit(route('admin.social_logins.index'))
                ->clickLink('Add new')
                ->type("facebook_client_id", $social_login->facebook_client_id)
                ->type("facebook_client_secret", $social_login->facebook_client_secret)
                ->type("facebook_redirect_url", $social_login->facebook_redirect_url)
                ->radio("facebook_login_enable", $social_login->facebook_login_enable)
                ->type("google_client_id", $social_login->google_client_id)
                ->type("google_client_secret", $social_login->google_client_secret)
                ->type("google_redirect_url", $social_login->google_redirect_url)
                ->radio("google_login_enable", $social_login->google_login_enable)
                ->press('Save')
                ->assertRouteIs('admin.social_logins.index')
                ->assertSeeIn("tr:last-child td[field-key='facebook_client_id']", $social_login->facebook_client_id)
                ->assertSeeIn("tr:last-child td[field-key='facebook_client_secret']", $social_login->facebook_client_secret)
                ->assertSeeIn("tr:last-child td[field-key='facebook_redirect_url']", $social_login->facebook_redirect_url)
                ->assertSeeIn("tr:last-child td[field-key='facebook_login_enable']", $social_login->facebook_login_enable)
                ->assertSeeIn("tr:last-child td[field-key='google_client_id']", $social_login->google_client_id)
                ->assertSeeIn("tr:last-child td[field-key='google_client_secret']", $social_login->google_client_secret)
                ->assertSeeIn("tr:last-child td[field-key='google_redirect_url']", $social_login->google_redirect_url)
                ->assertSeeIn("tr:last-child td[field-key='google_login_enable']", $social_login->google_login_enable);
        });
    }

    public function testEditSocialLogin()
    {
        $admin = \App\User::find(1);
        $social_login = factory('App\SocialLogin')->create();
        $social_login2 = factory('App\SocialLogin')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $social_login, $social_login2) {
            $browser->loginAs($admin)
                ->visit(route('admin.social_logins.index'))
                ->click('tr[data-entry-id="' . $social_login->id . '"] .btn-info')
                ->type("facebook_client_id", $social_login2->facebook_client_id)
                ->type("facebook_client_secret", $social_login2->facebook_client_secret)
                ->type("facebook_redirect_url", $social_login2->facebook_redirect_url)
                ->radio("facebook_login_enable", $social_login2->facebook_login_enable)
                ->type("google_client_id", $social_login2->google_client_id)
                ->type("google_client_secret", $social_login2->google_client_secret)
                ->type("google_redirect_url", $social_login2->google_redirect_url)
                ->radio("google_login_enable", $social_login2->google_login_enable)
                ->press('Update')
                ->assertRouteIs('admin.social_logins.index')
                ->assertSeeIn("tr:last-child td[field-key='facebook_client_id']", $social_login2->facebook_client_id)
                ->assertSeeIn("tr:last-child td[field-key='facebook_client_secret']", $social_login2->facebook_client_secret)
                ->assertSeeIn("tr:last-child td[field-key='facebook_redirect_url']", $social_login2->facebook_redirect_url)
                ->assertSeeIn("tr:last-child td[field-key='facebook_login_enable']", $social_login2->facebook_login_enable)
                ->assertSeeIn("tr:last-child td[field-key='google_client_id']", $social_login2->google_client_id)
                ->assertSeeIn("tr:last-child td[field-key='google_client_secret']", $social_login2->google_client_secret)
                ->assertSeeIn("tr:last-child td[field-key='google_redirect_url']", $social_login2->google_redirect_url)
                ->assertSeeIn("tr:last-child td[field-key='google_login_enable']", $social_login2->google_login_enable);
        });
    }

    public function testShowSocialLogin()
    {
        $admin = \App\User::find(1);
        $social_login = factory('App\SocialLogin')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $social_login) {
            $browser->loginAs($admin)
                ->visit(route('admin.social_logins.index'))
                ->click('tr[data-entry-id="' . $social_login->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='facebook_client_id']", $social_login->facebook_client_id)
                ->assertSeeIn("td[field-key='facebook_client_secret']", $social_login->facebook_client_secret)
                ->assertSeeIn("td[field-key='facebook_redirect_url']", $social_login->facebook_redirect_url)
                ->assertSeeIn("td[field-key='facebook_login_enable']", $social_login->facebook_login_enable)
                ->assertSeeIn("td[field-key='google_client_id']", $social_login->google_client_id)
                ->assertSeeIn("td[field-key='google_client_secret']", $social_login->google_client_secret)
                ->assertSeeIn("td[field-key='google_redirect_url']", $social_login->google_redirect_url)
                ->assertSeeIn("td[field-key='google_login_enable']", $social_login->google_login_enable)
                ->assertSeeIn("td[field-key='created_by']", $social_login->created_by->name);
        });
    }

}
