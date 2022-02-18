<?php

namespace Structural\Adapter\Solution;

class CurTarget
{
    public function request($Name): string
    {
        return "Hi " . $Name;
    }
}