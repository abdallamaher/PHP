<?php
namespace Tests;

use Creational\SimpleFactory\Solution\Factory;
use Creational\SimpleFactory\Solution\Models\A;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    Public function testFactoryCanCreateInstanceOfA ()
    {
        $factory = new Factory();
        $objA = $factory->build();
        $this->assertInstanceOf(A::class, $objA);
    }
}