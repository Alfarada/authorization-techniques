<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function a_user_can_be_an_admin()
    {
        $user = factory(User::class)->create([
            'admin' => false
        ]);

        // $user->refresh();
        $user = $user->fresh();

        $this->assertFalse($user->isAdmin());
        
        $user->admin = true;
        $user->save();
        
        $this->assertTrue($user->isAdmin());
    }
}
