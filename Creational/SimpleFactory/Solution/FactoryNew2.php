<?php

namespace Creational\SimpleFactory\Solution;

class FactoryNew2 extends Factory
{
    public function buildB(){
        return new E();
    }
}