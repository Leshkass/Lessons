<?php

$text = 'Hello Mick. My name is Nick';

if(strlen($text) > 20) {

    if (str_contains($text, '.')) {

        $rezult = substr($text, 0, strpos($text, '.') + 1);

        echo $rezult . PHP_EOL;
    } else {

        echo 'One offer' . PHP_EOL;
    }
}


