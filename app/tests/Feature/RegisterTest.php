<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * When I send a GET request to the register route,
     * Then it should return the learners.register view.
     * And I should see the registration form
     *
     * @return void
     */
    public function testRoute()
    {
        $response = $this->get('/learners/register');

        $response->assertStatus(200)->assertViewIs('learners.register');
        $response->assertSee('Register');
        $response->assertSee('Name');
        $response->assertSee('Email');
        $response->assertSee('Contact Number');
        $response->assertSee('Address');
        $response->assertSee('Date Of Birth');
        $response->assertSee('Gender');
        $response->assertSee('Vehicle Type');
        $response->assertSee('Password');

    }   

}
