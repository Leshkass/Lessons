<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $name = trim($_GET['name']);

    echo "Hello ,   $name";

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $firstNum = (int)trim($_POST['firstNum']);
    $secondNum = (int)trim($_POST['secondNum']);

    echo $firstNum + $secondNum;
}