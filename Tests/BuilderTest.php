<?php
namespace Tests;

use Creational\Builder\Solution\ABuilder;
use Creational\Builder\Solution\Models\A;
use Creational\Builder\Solution\Producer;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public  function  test_Produce_can_create_class_A()
    {
        $Builder = new ABuilder();
        $Producer = new Producer($Builder);
        $objA = $Producer->FULLPackage();
        $this->assertInstanceOf(A::class ,$objA);
    }
}