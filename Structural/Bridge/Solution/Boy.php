<?php

namespace Structural\Bridge\Solution;

abstract class Boy
{
    protected $sport;

    public function __construct(Sport $sport)
    {
        $this->sport = $sport;
    }

    abstract function play();
}