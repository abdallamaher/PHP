<?php

namespace Creational\SimpleFactory\Solution;

use Creational\SimpleFactory\Solution\Models\E;

class FactoryNew2 extends Factory
{
    public function buildB(){
        return new E();
    }
}