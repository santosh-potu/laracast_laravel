<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    /** @test  */
    public function a_user_can_have_team()
    {
        $user = factory('App\User')->create();
        
        $user->team()->create(['name'=>'Acme']);
        
        $this->assertEquals('Acme',$user->team->name);
    }
}
