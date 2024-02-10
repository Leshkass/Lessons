<?php
declare(strict_types = 1);

$function = function(int $result) : void {

    echo $result . PHP_EOL;
};

function Multiplication(int $number1, int $number2, closure $function = null ) : int
{
    $multiResult = $number1 * $number2;

    if(isset($function)){

        $function($multiResult);
    }
    return $multiResult;
}

Multiplication(78,4,$function);
