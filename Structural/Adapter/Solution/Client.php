<?php


use Structural\Adapter\Solution\CurTarget;
use Structural\Adapter\Solution\Adapter;

require_once __DIR__ . '/../../../vendor/autoload.php';


$adaptee = new CurTarget();

$adapter = new Adapter($adaptee);
$adapter->request("Abdallah", "Maher");