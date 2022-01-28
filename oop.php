<?php
//1.

class Person {

    public $name;
    public $age;

    public function getName() {
        echo "hello, my name is " . $this->name . ', im ' . $this->age . ' years old';     
    }

    public function setName($name, $age = '') {
        $this-> name = $name;
        $this-> age = $age;
    }
}

//2.

class MyClass {

    function __construct() {
        echo "MyClass class has initialized";
    }
}


//3 

class Calculator {

    public $num_1;
    public $num_2;

    function __construct($num_1, $num_2) {
        $this->num_1 = $num_1;
        $this->num_2 = $num_2;
    }

    public function add() {
        echo $this->num_1 + $this->num_2;
    }
    public function subtract() {
        echo $this->num_1 - $this->num_2;
    }
    public function multiply() {
        echo $this->num_1 * $this->num_2;
    }
    public function divide() {
        echo $this->num_1 / $this->num_2;
    }

}