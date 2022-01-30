<?php

namespace Creational\Builder\Solution;

class Producer
{
    private  $Builder;

    public function __construct($builder)
    {
        $this->Builder = $builder;
    }

    public  function LimitedPackage() {
        $this->Builder->Create_Class();
        return $this->Builder->Get_Class();
    }

    public  function BPackage() {
        $this->Builder->Create_Class();
        $this->Builder->Add_B();
        return $this->Builder->Get_Class();
    }

    public  function CPackage() {
        $this->Builder->Create_Class();
        $this->Builder->Add_C();
        return $this->Builder->Get_Class();
    }

    public  function FULLPackage() {
        $this->Builder->Create_Class();
        $this->Builder->Add_B();
        $this->Builder->Add_C();
        return $this->Builder->Get_Class();
    }
}