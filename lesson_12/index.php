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


// не правильно нет пробелов между '}' и 'if,else' , и elseif должно быть одним словом без пробелов
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



class Users
{
    public $name; // всегда нужно указавать тип данных

     private int $age; // вот так


    function setName($name)  // нехватает типа агрумента и что вщзвращает метод, а также области видимости метода
    {
        $this->name = $name;
    }
}

$task = new Users; // не правильно всегда при создании должны быть '()'

