<?php

class Box {
    public $length;
    private $width;
    protected $height;

    public function volume() {
        return $this->length * $this->width * $this->height;
    }
}

$num1 = 1;
$num2 = $num1;
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->width = 1;
$box2 = clone $box1;
$box1->width = 2;
var_dump($box1, $box2);

class MetalBox extends Box {
    public $weightperunit;
    public function mass() {
        return $this->weightperunit * $this->volume();
    }
    public function test2() {
        $this->height = 10;
        var_dump($this->height);
    }

}
$metal1 = new MetalBox();
var_dump($metal1);