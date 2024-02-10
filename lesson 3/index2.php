<?php

//$value = rand(1,7);
//
//if(1 === $value){
//
//    echo 'Green' . PHP_EOL;
//
//} elseif (2 === $value){
//
//    echo 'Red' . PHP_EOL;
//
//} elseif (3 === $value){
//
//    echo 'Blue' . PHP_EOL;
//
//} elseif (4 === $value){
//
//    echo 'Brown' . PHP_EOL;
//
//} elseif (5 === $value){
//
//    echo 'Violet' . PHP_EOL;
//
//} elseif(6 === $value){
//
//    echo 'Black' . PHP_EOL;
//
//} else {
//
//    echo 'White' . PHP_EOL;
//}

//$value = rand(1,7);
//
//switch ($value) {
//    case 1 :
//        echo 'Green' . PHP_EOL;
//        break;
//    case 2 :
//        echo 'Red' . PHP_EOL;
//        break;
//    case 3 :
//        echo 'Blue' . PHP_EOL;
//        break;
//    case 4 :
//        echo 'Brown' . PHP_EOL;
//        break;
//    case 5 :
//        echo 'Violet' . PHP_EOL;
//        break;
//    case 6 :
//        echo 'Black' . PHP_EOL;
//        break;
//    default :
//        echo 'White' . PHP_EOL;
//}


$value = rand(1,7);

$valueRezult = match ($value) {
    1 => 'Green',
    2 => 'Red',
    3 => 'Blue',
    4 => 'Brown',
    5 => 'Violet',
    6 => 'Black',
    default => 'White'
};

echo $valueRezult . PHP_EOL;