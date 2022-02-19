<?php

namespace Structural\Composite\Solution;


class Employee extends CompanyComponent
{
    public $name;

    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print_info($level){
        for($i = 0; $i < $level; $i++)echo "-";

        echo "Name :: " .  $this->name . ", with salary :: " . $this->salary . "\n";
    }
}