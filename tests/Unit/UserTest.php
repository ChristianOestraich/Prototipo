<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;



class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function testBasic()
    {
        $user = new \App\User;

        $user->setFirstName('chrisian');

        $this->assertEquals($user->getFirstName(),'chrisian');

    }
    
}
