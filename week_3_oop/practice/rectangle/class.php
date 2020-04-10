<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function display()
    {
        return "{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }

    public function draw()
    {
        for ($i = 0; $i < $this->height; $i++) {
            echo "<br>";
            for ($j = 0; $j < $this->width; $j++) {
                echo "*";
            }
        }
    }


}