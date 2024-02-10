<?php
declare(strict_types = 1);


function GeneratorFib(int $max = 20)
{
    $i = 1;
    $num1 = 0;
    $num2 = 1;

    while($i <= $max){

        $result = $num1 + $num2;

        $num1 = $num2;

        $num2 = $result;

        yield $result;

        $i++;
    }
}

foreach(GeneratorFib(8) as $items){
    echo $items . PHP_EOL;
}

//$start = memory_get_usage();
//$numbers = range(1,600000);
//$end = memory_get_usage();

//function Test(int $start, int $end)
//{
//    for($i = $start; $i <= $end; $i++){
//        yield $i;
//    }
//}
//
//$start = memory_get_usage();
//$numbers = Test(1,600000);
//$end = memory_get_usage();
//
//
//
//
//echo $end - $start . PHP_EOL;