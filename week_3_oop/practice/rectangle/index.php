<?php
include "class.php";

$width = 10;
$height = 20;

$rectangle = new Rectangle($width,$height);

echo "Area = " . $rectangle -> getArea() . " ; ";
echo "Perimeter = " . $rectangle ->getPerimeter() . " ; ";
echo "Your rectangle " . $rectangle ->display();
echo $rectangle ->draw();
