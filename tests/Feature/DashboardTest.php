<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{   
    use RefreshDatabase;

    /** @test */
    function its_shows_the_dashboard_page_to_authenticated_users()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('home'))
            ->assertStatus(200)
            ->assertSee('Dashboard');
    }

    /** @test */
    function it_redirects_guest_users_to_the_login_page()
    {
        $this->get(route('home'))
            ->assertStatus(302)
            ->assertRedirect('login');
    }
}
