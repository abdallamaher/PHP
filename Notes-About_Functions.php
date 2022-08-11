#!/usr/bin/php
<?php
/*
read from bottom to up
*/

// callbacks
function string($string, $callback){
    $results = array(
        'upper' => strtoupper($string),
        'lower' => strtolower($string),
    );

    if(is_callable($callback)) {
        call_user_func($callback, $results);
    }
}
string('Abdallah', function($name) {
    echo $name['upper'];
});
return ;

// Both anonymous functions and arrow functions are implemented using the Closure class.
$y = 1;
 
$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
return ;
$x = 1;
$fn = fn() => $x++; // Has no effect
$fn();
return;
// Anonymous functions may be declared statically. This prevents them from having the current class automatically bound to them.
$x = 1;
$fun = static function ()
{
    # var_dump($this); fatal error
    # var_dump($x);    fatal error
};
$fun();

return ;
# As of PHP 7.1, these variables must not include superglobals, $this, or variables with the same name as a parameter.
$x = 1;
$fun = function ($x) use ($this, $_GET, $x) {
    # code...
};
return ;
$x = 1;
$fun = function () use ($x)
{
    # code...
};

return;
$x = 1;
$fun = function ()
{
    echo $x;    // error as don't automatically bound outside variables
};
$fun();

return ;
// current class automatically bound to them
$fun = function ()
{
    var_dump($this);
};
$fun();
return ;

// Both anonymous functions and arrow functions are implemented using the Closure class.
// Closure is a Class used to represent anonymous functions.
// In JavaScript, a closure can be thought of as a scope, inherits the scope it's defined in
// In PHP,  a closure is a callable class, to which you've bound your parameters manually.
// This class has methods that allow further control of the anonymous function after it has been created
// also has an __invoke method.
final class Closure {
    /* Methods */
    private __construct()
    public static bind(Closure $closure, ?object $newThis, object|string|null $newScope = "static"): ?Closure
    public bindTo(?object $newThis, object|string|null $newScope = "static"): ?Closure
    public call(object $newThis, mixed ...$args): mixed
    public static fromCallable(callable $callback): Closure
}
return;

//if a variable name has parentheses appended to it,
$fun = function ()  // anonymous function
{
       echo "hello world!"; 
}; 
$fun();       

return;
// self != $self // naming conventions 

return;
// type hinting

Interface I {

}
class A implements I {
    public ?string $s = null;
}
function go(?A $a = null)
{
    
}
go(null);
return ;
function FunctionName(?string $s) : string
{
    return "hello world";
}

return ;
// calculate time in micro second

function sum($array,$max){   //For Reference, use:  "&$array"
    $sum=0;
    for ($i=0; $i<2; $i++){
        #$array[$i]++;        //Uncomment this line to modify the array within the function.
        $sum += $array[$i]; 
    }
    return ($sum);
}

$max = 1E5;                  //10 M data points.
$data = range(0,$max,1);

$start = microtime(true);
for ($x = 0 ; $x < 100; $x++){
    $sum = sum($data, $max);
}
$end =  microtime(true);
echo "Time: ".($end - $start)." s\n";