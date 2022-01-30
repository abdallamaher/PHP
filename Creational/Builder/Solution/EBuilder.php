<?php

namespace Creational\Builder\Solution;

use Creational\Builder\Solution\Models\E;
use Creational\Builder\Solution\Models\B;
use Creational\Builder\Solution\Models\C;

class EBuilder
{
    /**
     * @var E $type
     */
    private $type;

    public function Create_Class()
    {
        $this->type = new E();
    }


    public function Add_B()
    {
        // you can change to Add_F(new F())
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