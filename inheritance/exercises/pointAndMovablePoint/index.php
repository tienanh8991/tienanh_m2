<?php
include_once "MovablePoint.php";
include_once "point.php";

$point = new point();
$point->setXY(1,2);

$move = new MovablePoint();
$move->setSpeed(3,4);
$move->move();
echo $move->toString();