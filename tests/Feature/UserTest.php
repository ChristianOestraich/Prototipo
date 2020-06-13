<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_create_user()
   {
       \App\User::create([
           'name'=>'Admin User',
           'email'=>'admin@admin.com',
           'password'=> bcrypt(12345678) 
       ]);

       $this->assertDatabaseMissing('users',['name'=>'Admin User']);
   }
   public function testDatabase()
    {
    // Make call to application...
        $this->assertDatabaseMissing('users', ['email' => 'sally@example.com']);
    }
}
