<?php

class Box {
    public $length;
    public $width;
    public $height;

    public function volume() {
        return $this->length * $this->width * $this->height;
    }
}
$box1 = new Box();
$box1->length = 5;
$box1->width = 3;
$box1->height = 2;
var_dump($box1->volume());
