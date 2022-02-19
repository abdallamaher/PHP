<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\Solution\A;
use Structural\Bridge\Solution\B;
use Structural\Bridge\Solution\Football;
use Structural\Bridge\Solution\Volleyball;

class BridgeTest extends TestCase
{
    public  function  test_boy_A_can_play_football()
    {
        $football = new Football();
        $boyA = new A($football);
        $this->assertEquals('the boy plays Football',$boyA->play());
    }

    public  function  test_boy_A_can_play_volleyball()
    {
        $volleyBall = new Volleyball();
        $boyA = new A($volleyBall);
        $this->assertEquals('the boy plays Volleyball',$boyA->play());
    }

    public  function  test_boy_B_can_play_football()
    {
        $football = new Football();
        $boyB = new B($football);
        $this->assertEquals('the boy plays Football',$boyB->play());
    }

    public  function  test_boy_B_can_play_volleyball()
    {
        $volleyBall = new Volleyball();
        $boyB = new B($volleyBall);
        $this->assertEquals('the boy plays Volleyball',$boyB->play());
    }
}