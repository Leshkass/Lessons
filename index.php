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

//$numMax = 0;
//
//foreach($newArray as $items){
//
//    if($items > $numMax){
//
//        $numMax = $items;
//    }
//}
//
//echo $numMax . PHP_EOL;

//$numMin = 10;
//
//foreach($newArray as $items){
//
//    if($items < $numMin){
//
//        $numMin = $items;
//    }
//}
//
//echo $numMin . PHP_EOL;


function Summa(int $number) : int
{
    $result = 0;

    for($i = 1; $i <= $number; $i++){

        $result += $i;
    }

    return $result;
}

echo Summa(10) . PHP_EOL;
