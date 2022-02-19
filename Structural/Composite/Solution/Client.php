<?php

namespace Structural\Composite\Solution;

use Structural\Composite\Solution\Department;
use Structural\Composite\Solution\Employee;

require_once __DIR__ . '/../../../vendor/autoload.php';

$e1 = new Employee("A", 100);
$e2 = new Employee("B", 200);
$e3 = new Employee("C", 300);
$e4 = new Employee("D", 400);
$e5 = new Employee("E", 500);
$e6 = new Employee("F", 600);

$d1 = new Department("Computer Science");
$d2 = new Department("Artificial Intelligence");
$d3 = new Department("Data science");

$d1->add($e1);
$d1->add($e2);
$d2->add($e3);
$d2->add($e4);
$d3->add($e5);
$d3->add($e6);
$d2->add($d3);
$d1->add($d2);

// $d1->print_info(1);
// $e1->add($e2);   // error
echo $d1->salaries_sum();