<?php

use Structural\Adapter\Problem\CurTarget as Target;

require_once __DIR__ . '/../../../vendor/autoload.php';

function fillName($first_name, $last_name) {
    return $first_name . " ". $last_name;
}

$obj = new Target();
/*
// In the pre version of our Target library:
// takes (first_name, last_name)
    $obj->request("Abdallah", "Maher");


// In the current version Target ibrary
// takes full_name:
    so one work around is like below;
*/
echo $obj->request(fillName("Abdallah", "Maher"));