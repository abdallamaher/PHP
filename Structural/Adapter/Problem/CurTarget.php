<?php

namespace Structural\Adapter\Problem;

class CurTarget
{
    public function request($Name): string
    {
        return "Hi " . $Name;
    }

}