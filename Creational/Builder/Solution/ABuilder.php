<?php

namespace Creational\Builder\Solution;

use Creational\Builder\Solution\Models\A;
use Creational\Builder\Solution\Models\B;
use Creational\Builder\Solution\Models\C;

class ABuilder
{
    /**
     * @var A $type
     */
    private $type;

    public function Create_Class()
    {
        $this->type = new A();
    }


    public function Add_B()
    {
        $this->type->Add_B(new B());
    }


    public function Add_C()
    {
        $this->type->Add_C(new C());
    }

    public function Get_Class()
    {
        return $this->type;
    }
}