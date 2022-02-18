<?php

namespace Structural\Adapter\Solution;

class PreTarget
{
    public function request($first_name, $last_name): string
    {
        return "Hi " . $first_name . $last_name;
    }
}