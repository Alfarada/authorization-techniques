<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomDirectivesTest extends TestCase
{   
    use RefreshDatabase;

    /** @test */
    public function test_example()
    {
        $this->assertFalse(Blade::check('admin'));
    }
}
