<?php

namespace Structural\Composite\Solution;


class Department extends CompanyComponent
{
    public $name;
    public $subComponents = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function add(CompanyComponent $C) {
        array_push($this->subComponents, $C);
    }

    public function print_info($level) {
        for($i = 0; $i < $level; $i++) echo "+";
        echo $this->name . ", with subEmplyees : \n";
        foreach ($this->subComponents as $C) {
            $C->print_info($level + 1);
        }
    }

    public function salaries_sum() {
        $sum = 0;
        foreach ($this->subComponents as $C) {
            $sum += $C->salary;
            $C->salaries_sum();
        }
        return $sum;
    }
}