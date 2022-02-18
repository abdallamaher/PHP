<?php

namespace Structural\Adapter\Solution;

class Adapter extends PreTarget
{
    private $adaptee;

    public function __construct(CurTarget $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request($first_name, $last_name): string
    {
        $name = $first_name . " ". $last_name;
        return $this->adaptee->request($name);
    }
}