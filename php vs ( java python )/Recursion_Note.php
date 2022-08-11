<?php
/*
Note: Recursive function/method calls with over 100-200 recursion levels can smash the stack and cause a termination of the current script. 
Especially, infinite recursion is considered a programming error.
*/
function go($i)
{
    echo $i;
    echo "\n";
    go($i + 1);
}

go(0); // reached 254