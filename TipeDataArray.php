<?php

$values = ["Ridwan","Satria","Wicaksana"];
var_dump($values);


var_dump($values[0]);

$values[0] = "Budy";
var_dump($values[0]);

unset($values[1]);
var_dump($values);

$values[]="Kasino";
var_dump($values);
var_dump(count($values));


$eko = [
    'id' => "eko",
    'name' => "Kurniawan",
    'age' => 30,
    'addres' => [
        'city' => "jakarta",
        'country' => "indonesia"
    ]
];
var_dump($eko);

var_dump($eko['name']);
var_dump($eko['addres']['country']);