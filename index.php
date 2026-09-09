<?php

class Box {
    public $width; // public properties can be accessed from anywhere
    private $height; // private properties can only be accessed from within the class
    protected $length; // protected properties can be accessed from within the class and its subclasses
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

    public function test(){
        var_dump($this->width);
    }

    public function setHeight($height) {
        if($height > 0) {
            $this->height = $height;
        }
    }

    public function getHeight($height) {
        return $this->height;
    }
}

class metalBox extends Box {
    public $weight;
public function mass() {
        return $this->volume() * $this->weight; // This will cause an error because $width is a private property of the parent class Box and cannot be accessed from the subclass metalBox.
    }
    public function test() {
        var_dump($this->width); // This will cause an error because $width is a private property of the parent class Box and cannot be accessed from the subclass metalBox.
    }

}

$metal1 = new Box();
$metal1->test();
var_dump($metal1);

?>