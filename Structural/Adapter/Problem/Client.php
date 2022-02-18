<?php

use Structural\Adapter\Problem\CurTarget as Target;

require_once __DIR__ . '/../../../vendor/autoload.php';

function fillName($first_name, $last_name) {
    return $first_name . " ". $last_name;
}

$obj = new Target();
/*
In the pre version of our Target library:
// takes two parameters
    $obj->request("Abdallah", "Maher");


In the current version Target
// library takes one parameter:
    so one work around is like below;
*/
echo $obj->request(fillName("Abdallah", "Maher"));