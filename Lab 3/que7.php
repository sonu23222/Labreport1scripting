<?php
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return pow($this->side, 2);
    }
}


$circle = new Circle(1);
echo "Circle Area: " . $circle->calculateArea() . "<br>";

$square = new Square(2);
echo "Square Area: " . $square->calculateArea() . "<br>";
?>