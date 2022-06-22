<?php

$name = "ridwan";

echo "nama : " . $name . PHP_EOL;
echo "value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

echo $name[0]."\n";
echo $name[1]."\n";
echo $name[2]."\n";

echo "Hello $name Selamat belajar".PHP_EOL;

$var = "var";
echo "This is {$var}s";