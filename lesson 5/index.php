<?php
declare(strict_types = 1);

function CreateArray(int $length = 20, int $min = 0, int $max = 10 ) : array
{
    $result = [];

    for ($i = 0; $i < $length; $i++){

        $result[] = rand($min,$max);

    }

    return $result;
}

$newArray = CreateArray(5);

//function MaxMIn( array $newArray) : void
//{
//    echo 'Max Number is : ' . max($newArray) . PHP_EOL;
//
//    echo 'Min Number is : ' . min($newArray) . PHP_EOL;
//}
//
//MaxMIn($newArray);
//

rsort($newArray);

var_dump($newArray);