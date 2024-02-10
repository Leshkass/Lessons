<?php

$numbers = 0;

echo "Enter first number: \n";

$numbers += (int)fgets(STDIN);

echo "Enter second number: \n";

$numbers += (int)fgets(STDIN);

echo "Enter third number: \n";

$numbers += (int)fgets(STDIN);

echo "Enter fourth number: \n";

$numbers += (int)fgets(STDIN);

echo "Enter fifth number: \n";

$numbers += (int)fgets(STDIN);

$answer = $numbers / 5;

echo 'Sum is ' . $numbers . "\n";

echo 'Your answer is  ' . round($answer) . "\n";

