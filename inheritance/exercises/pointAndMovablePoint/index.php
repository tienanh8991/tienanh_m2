<?php
include_once "MovablePoint.php";
include_once "Point2D.php";

$point = new Point2D();
$point->setXY(1,2);

$move = new MovablePoint();
$move->setSpeed(3,4);
$move->move();
$move->toString();