<?php

namespace Structural\Adapter\Problem;

class CurTarget
{
    public function request($full_name): string
    {
        return "Hi " . $full_name;
    }

}