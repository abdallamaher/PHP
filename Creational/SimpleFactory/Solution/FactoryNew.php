<?php

namespace Creational\SimpleFactory\Solution;

class FactoryNew extends Factory
{
    public function buildC(){
        return new D();
    }
}