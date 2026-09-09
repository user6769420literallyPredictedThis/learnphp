<?php

class Box {
    public $length;
    public $width;
    public $height; 
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function open() {
        $this->isOpen = true; // Dollar sign not needed here because we are accessing the property of the current object using $this.
        $this->hasBeenOpened = true;
    }
    public function close() {
        $this->isOpen = false;
    }

    public function volume(){
        return $this->length * $this->width * $this->height;
    }
}

$box1 = new Box(); // Create a new instance of the Box class
$box1->width = 10;
$box1->length = 5;
$box1->height = 3;


$box1->open();
var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2->width = 2;
$box2->length = 4;
$box2->height = 6;
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);

?>