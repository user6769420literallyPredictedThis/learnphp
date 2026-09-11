<?php

class Box {

    public function __construct(public $w, private $h, private $l) {
        var_dump('Box was created!');
    }

    public function volume() {
        return $this->w * $this->h * $this->l;
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __get($name) {
        var_dump($name);
        return 'YOLO';
    }

    public function __invoke() {
        var_dump('Im a function!');
    }

    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __toString() {
        return "Im a box yay!";
    }

    public function __destruct() {
        var_dump('Box was destroyed!');
    }

}

function lol(){
    $box4 = new Box(4, 4, 5);
}

lol();

$box1 = new Box(1, 2, 3);
$box1->color = 'hello';
$box1();
$box1->hello(1, 'asdasdasd', 'dfgdfgdfg');
var_dump($box1->lolololol);
$box2 = new Box(4, 5, 6);
var_dump($box1, $box2);
$box3 = clone $box2;
echo $box1;

// https://www.php.net/manual/en/language.oop5.magic.php magic methods

?>