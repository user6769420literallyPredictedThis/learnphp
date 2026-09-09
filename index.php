<?php

class Cat {
    use makeSound; // Using the trait
}

class Dog {
    use hasSmell;
}

trait hasSmell {
    public $smell;
    public function sniff() {
        return "Smells like $this->smell";
    }
}

trait makeSound { // Trait to add sound functionality
    public $sound;
    public function noise() {
        return $this->sound;
    }
}

?>