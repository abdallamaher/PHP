<?php

namespace Structural\Adapter\Solution;

class CurTarget
{
    public function request($full_name): string
    {
        return "Hi " . $full_name;
    }
}