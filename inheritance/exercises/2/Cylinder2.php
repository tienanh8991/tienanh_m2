<?php


class Cylinder2 extends Circle2
{
protected $height;

public function __construct($radius, $color,$height)
{
    parent::__construct($radius, $color);
    $this->height = $height;
}
public function calculateVolume()
{
    return parent::calculateArea()*$this->height;
}
}