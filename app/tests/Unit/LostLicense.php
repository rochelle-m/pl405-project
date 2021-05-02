<?php

namespace Tests\Unit;

namespace Tests\Feature;

use Tests\TestCase;

class LostLicense extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRoute()
    {
        $response = $this->get('/license/lost');

        $response->assertStatus(200)->assertViewIs('permanent_licence.lost');;
    }

    public function testView()
    {
        $response = $this->get('/license/lost');

        $response->assertViewIs('permanent_licence.lost');;
    }
}
