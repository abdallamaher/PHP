<?php

namespace Creational\SimpleFactory\Solution;

use Creational\SimpleFactory\Solution\Models\D;

class FactoryNew extends Factory
{
    public function buildC(){
        return new D();
    }
}