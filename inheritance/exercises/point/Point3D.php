<?php


class Point3D extends Point2D
{
protected $z;
protected  $array = [];

public function __construct()
{
    parent::__construct();

}

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function setXYZ($x,$y,$z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ()
    {
        array_push($this->array,$this->x,$this->y,$this->z);
        return $this->array;
    }
    public function toString()
    {
        return implode(',' , $this->getXYZ());
    }
}