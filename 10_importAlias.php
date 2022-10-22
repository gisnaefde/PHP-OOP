<?php

require_once 'Data/Conflict.php';
require_once 'Data/Helper.php';

//Jika terdapat nama class yang sama maka kiat abisa memangiilnya dalam satu file tetapi harus menggunakan alias.
//alias juga dapat dilakukan jika kita ingin mempersingkat pemanggilan variable, function dll.

use Data\one\Conflict as Conflict1;
use Data\two\conflict as Conflict2;
use function Helper\helpme as help;
use const Helper\APPLICATION as APP;

$nama = new Conflict1;
$nama->name = "Gisna FD";
echo "Nama : $nama->name".PHP_EOL;

$umur = new Conflict2;
$umur->umur = 20;
echo "Umur : $umur->umur".PHP_EOL;

help();
echo APP;
