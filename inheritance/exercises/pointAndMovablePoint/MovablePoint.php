<?php


class MovablePoint extends Point2D
{
protected $xSpeed;
protected $ySpeed;
protected $array = [];

public function __construct()
{
    parent::__construct();
}
public function setSpeed($xSpeed,$ySpeed){
    $this->xSpeed = $xSpeed;
    $this->ySpeed = $ySpeed;
}
public function getSpeed(){
    array_push($this->array,parent::getX(),parent::getY(),$this->xSpeed,$this->ySpeed);
    return $this->array;
}
public function move(){
    $this->x += $this->xSpeed;
    $this->y += $this->ySpeed;
}
public function toString()
{
    return implode(',' , $this->getSpeed());
}
}