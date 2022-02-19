<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Solution\CurTarget;
use Structural\Adapter\Solution\Adapter;

class AdapterTest extends TestCase
{
    public  function  test_client_old_library_ineterface_can_return_string()
    {
        $adaptee = new CurTarget();
        $adapter = new Adapter($adaptee);
        $user_name = $adapter->request("Abdallah", "Maher");
        $this->assertEquals("Hi Abdallah Maher", $user_name);
    }
}