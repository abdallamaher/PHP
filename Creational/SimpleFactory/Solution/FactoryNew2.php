<?php

namespace Creational\SimpleFactory\Solution;

class FactoryNew2
{
    public function buildB(){
        return new E();
    }
}