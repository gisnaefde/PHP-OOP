<?php

require_once 'Data/Conflict.php';
require_once 'Data/Helper.php';

$Gisna = new \Data\one\Conflict(); //untuk pemanggilan namespaces harus diikuti dengan tempat namespaces itu berada.
$Gisna->name ="Gisna";

echo "Nama : $Gisna->name".PHP_EOL; 

$Umur = new \Data\two\Conflict ();
$Umur->umur = 20;

echo "Umur : $Umur->umur".PHP_EOL;

//untuk memamnggil constanta dan juga function dalam namespace terlebih dulu harus diawalidengan memanf=ggil tempat const dan function tersebut.
echo Helper\APPLICATION;
echo Helper\helpme();
