<?php
include "Point2D.php";
include "Point3D.php";

$point3d = new Point3D();
$point3d->setXYZ(1,2,3);
var_dump($point3d->toString());