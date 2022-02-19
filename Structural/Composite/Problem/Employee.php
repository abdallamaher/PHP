<?php

namespace Structural\Composite\Problem;

class Employee
{
    public $name;
    public $salary;

    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print_employee_info($level){
        for($i = 0; $i < $level; $i++)echo "-";

        echo "Name :: " .  $this->name . ", with salary :: " . $this->salary . "\n";
    }
}