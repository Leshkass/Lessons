<?php
declare(strict_types = 1);

$fileName = 'text.txt';

function writeToFile(string $fileName, string $name): void
{
    $file = fopen($fileName,'wa');
    fwrite($file, 'User name is ' . $name);
    fclose($file);
}

echo "Enter your name: \n";
$name = fgets(STDIN);

writeToFile($fileName, $name);

function readDataFromFile(string $fileName): string
{
    $file = fopen($fileName, 'r');
    $fileSize = filesize($fileName);
    $contentFile = fread($file, $fileSize);
    fclose($file);

    return $contentFile;
}

echo readDataFromFile($fileName);