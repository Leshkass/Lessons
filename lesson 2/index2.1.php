<?php

echo "Hello, What is your name ? \n";

$name = trim(fgets(STDIN));

echo "Hi, $name. How old are you? \n ";

$age = fgets(STDIN);

echo "Where do you live? \n";

$town = trim(fgets(STDIN));

echo "What programming language are you learning?\n";

$language = trim(fgets(STDIN));

echo 'My name is ' . $name . ' and I\'m ' . $age . ' years old' . "\n";

echo 'I live in ' . $town . '  and teach ' . $language . "\n";


