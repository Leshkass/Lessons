<?php
declare(strict_types = 1);

//echo 'Enter radius circle : ';
//
//$radius =  (int)fgets(STDIN);
//
//
//function SquareCircle( int|float $radius) : int|float
//{
//
//    return pi() * $radius**2;
//
//}
//
//echo 'Square circle is  : '  . round(SquareCircle($radius), 2) . PHP_EOL;




//echo 'Enter number : ';
//
//$number = (int)fgets(STDIN);
//
//echo 'Enter degree : ';
//
//$degree = (int)fgets(STDIN);
//
//function NumDegree(int $number, int $degree) : int
//{
//    return $number** $degree;
//}
//
//echo NumDegree($number, $degree) . PHP_EOL;


function degree(&$number)
{
     $number = $number**2;
}

$test = 78;

degree($test);

echo $test;

