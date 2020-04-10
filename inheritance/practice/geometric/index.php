<?php
include "Circle.php";
include "Cylinder.php";
include "Rectangle.php";
include "Square.php";

$circle = new Circle('Circle',5);
echo "Circle Area : " . $circle->calculateArea() . "<br>";
echo "Circle Perimeter : " .$circle->calculatePerimeter() . "<br>";

$cylinder = new Cylinder('Cylinder' ,5,6);
echo "Cylinder Area : " . $cylinder->calculateArea() . "<br>";
echo "Cylinder Perimeter : " .$cylinder->calculatePerimeter() . "<br>";

$rectangle = new Rectangle('Rectangle' ,3,4);
echo "Rectangle Area : " . $rectangle->calculateArea() . "<br>";
echo "Rectangle Perimeter : " .$rectangle->calculatePerimeter() . "<br>";

$square = new Square('Square',4);
echo "Square Area : " . $square->calculateArea() . "<br>";
echo "Square Perimeter : " .$square->calculatePerimeter() . "<br>";