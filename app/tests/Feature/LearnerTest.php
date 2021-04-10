<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LearnerTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * Test if learner test instructions displayed[POST] 
     * Correct credentials
     *
     * @return void
     */
    public function testShowInstructionsPost()
    {
        $response = $this->post('/learners/test/instructions', [
            'token' => '100066',
            'password' => 'sapan1234',
            'aadhar_no' => '112233445580'
        ]);

        $response->assertStatus(200)->assertViewIs('learners.test.instructions');
        $response->assertSee('Instructions');
        $response->assertSee('Sapan Verma');   
    }

    /**
     * Test if learner test instructions displayed[POST] 
     * Wrong password
     *
     * @return void
     */
    public function testShowInstructionsPostFailwithPassword()
    {
        $response = $this->post('/learners/test/instructions', [
            'token' => '100066',
            'password' => 'sapan1222',
            'aadhar_no' => '112233445580'
        ]);

        $response->assertStatus(200)->assertViewIs('learners.failed');
    }

    /**
     * Test if learner test instructions displayed[POST] 
     * Wrong token
     *
     * @return void
     */
    public function testShowInstructionsPostFailWithToken()
    {
        $response = $this->post('/learners/test/instructions', [
            'token' => '100068',
            'password' => 'sapan1222',
            'aadhar_no' => '112233445580'
        ]);

        $response->assertStatus(200)->assertViewIs('learners.failed');
    }

     /**
     * Test if learner test instructions is displayed[GET].
     *
     * @return void
     */
    public function testShowInstructionsGet()
    {
        $response = $this->get('/learners/test/instructions');

        $response->assertStatus(200)->assertViewIs('learners.test.instructions');
        $response->assertSee('Instructions');    
    }
    
}
