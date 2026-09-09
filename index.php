<?php
$test = 'Hello';
$test = $test . 'world' . '!';
$test .= '!!!!';
$name = 'Andrei';
$age = 20;
$test = "$name is $age years old!";
$test = "hello world!";
var_dump($test);
$numbers = [1, 2, 3, 4, 5];
$numbers[2] = 10;
var_dump($numbers[2]);
$test = [1, 'sasd', true, [1, 2, 3]];
var_dump($test[3][1]);
$test = ['name' => 'Andrei',
 'age' => 20,
    1,
    2,
    3,
    'color' => 'green',
    5,
    100 => 6,
    7,
];
var_dump($test[3]);
$combined = [1, 2, 3] + [4, 5, 6, 7];
var_dump($combined);
$text = implode('-', $test);
var_dump($text);