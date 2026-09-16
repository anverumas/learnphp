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
$fruits = ['apple', 'banana', 'orange'];
for($i = 0; $i < count($fruits); $i++) {
    var_dump($fruits[$i]);
}
foreach($fruits as $fruit) {
    var_dump($fruit);
}
foreach($fruits as $key => $fruit) {
    var_dump("$key, $fruit");
}
