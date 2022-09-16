<?php
require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape=new Shape();
$rectangle=new Rectangle();

echo $shape->getCorner().PHP_EOL;
echo $rectangle->getCorner().PHP_EOL;
echo $rectangle->getParrentCorner().PHP_EOL;