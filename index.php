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
function helloName($name='Nameless', $age=0){
    var_dump("Hello, $name! you are $age years old");
}
helloName();
$num = 10;
if($num > 5) {
    var_dump('bigger');
} elseif ($num == 5) {
    var_dump('equal');
}
else {
    var_dump('smaller');
}
$day = (int) date('w');
var_dump($day);

if($day == 0) {
    var_dump('sunday');
} else if($day == 1) {
    var_dump('monday');
} else if($day == 2) {
    var_dump('tuesday');
} else if($day == 3) {
    var_dump('wednesday');
} else if($day == 4) {
    var_dump('thursday');
} else if($day == 5) {
    var_dump('friday');
} else if($day == 6) {
    var_dump('saturday');
}