<?php


class Circle2
{
    protected $radius;
    protected $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }
}