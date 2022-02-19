<?php

namespace Structural\Bridge\Solution;

class B extends Boy
{
    public function __construct(Sport $sport)
    {
        parent::__construct($sport);
    }

    public function play(){
        return sprintf('the boy plays %s', $this->sport->sport_name());
    }
}