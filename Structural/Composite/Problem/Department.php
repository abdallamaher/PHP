<?php

namespace Structural\Composite\Problem;

class Department
{
    public $name;
    public $subEmployees = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function add($obj){
        array_push($this->subEmployees, $obj);
    }

    public function print_department_info($level) {
        for($i = 0; $i < $level; $i++) echo "+";
        echo $this->name . ", with subEmplyees : \n";
        foreach ($this->subEmployees as $obj){
            if($obj instanceof Department) {
                $obj->print_department_info($level + 1);
            }
            else if($obj instanceof Employee){
                $obj->print_employee_info($level + 1);
            }
        }
    }
}