<?php
include "Circle2.php";
include "Cylinder2.php";

$circle = new Circle2(5,"blue");
echo "Circle Area : " .$circle->calculateArea()."<br>";
echo "<br>";

$cylinder = new Cylinder2(5,"green",10);
echo "Cylinder Volume : " . $cylinder->calculateVolume();