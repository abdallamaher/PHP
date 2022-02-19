<?php

namespace Structural\Composite\Solution;

abstract class CompanyComponent
{

    public $salary;

    abstract function print_info($level);

    public function add(CompanyComponent $C) {
        throw new Exception('Not implemented');
    }

    public function salaries_sum() {
    }
}