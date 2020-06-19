<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testHttpInicial()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }
    public function testHttpLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

    }
    public function testHttpRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);

    }
    public function testLaravel()
    {
        $response = $this->get('/');

        $response->assertSeeInOrder(['Laravel']);
    }
    public function testloginPageLoadsCorrectly() {

        $response = $this->get("/login");
        
        $response->assertSeeInOrder(['E-Mail Address']);
    }
    
}
