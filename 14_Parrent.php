<?php

require_once 'Data/Shape.php';

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() .PHP_EOL;

$Rectangle = new Rectangle();
echo $Rectangle->getCorner() .PHP_EOL;

echo $Rectangle->getParrentCorner();//Ini akan memanggil nilai dari parrent nya meski function nya ada di Rectangle

