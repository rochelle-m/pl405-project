<?php

namespace Tests\Unit;

namespace Tests\Feature;

use Tests\TestCase;

class LostLicense extends TestCase
{
    /**
     * Test the route returns 200
     *
     * @return void
     */
    public function testRoute()
    {
        $response = $this->get('/license/lost');

        $response->assertStatus(200);
    }

    /**
     * Test the route returns view
     *
     * @return void
     */
    public function testView()
    {
        $response = $this->get('/license/lost');

        $response->assertViewIs('permanent_licence.lost');
    }

    /**
     * Test the route returns view
     *
     * @return void
     */
    public function testSee()
    {
        $response = $this->get('/license/lost');

        $response->assertSee('Application For Duplicate License');
    }

    /**
     * Test the route returns view
     *
     * @return void
     */
    public function testViewSave()
    {
        $response = $this->post('/license/lost/save', [        
            'reason' => 'stolen',
            'license_no' => '2021001',
            'aadhar_no' => '111122224455',
            'fir' => 'FX11224'
        ]);

        $response->assertStatus(200);;
    }
}
