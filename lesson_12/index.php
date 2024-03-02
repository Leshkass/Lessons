<?php
declare(strict_types=1);

// не првильная запись и не нет логики в названии переменных
$a = 34; $test = 'Nick';

// правильно
$getAge = 34;
$getName = 'Nick';



// не првильно
function test(){
    echo 'Test';
}


//правильно
function getNameUser(string $name): string
{
    return $name;
}


// не правильно
if($a===$b){
    $result = $b;
}else if($a===$c){
    $result = $c;
}else{
    echo $a;
}



// првильно
if ($a === $b) {
    $result = $b;
} elseif ($a === $c){
    $result = $c;
} else {
    echo $a;
}
