<?php

require_once 'Data/Conflict.php';
require_once 'Data/Helper.php';

use Data\one\{Conflict as Conflict1, Sample , dummy}; // ini meruapakan contoh import group, dimana me import beberapa class dari satu namespaces yang sam.
use function Helper\helpme as help;
use const Helper\APPLICATION as APP;

$nama = new Conflict1;
$nama->name = "gisna";
echo "Nama : $nama->name".PHP_EOL;

help();
echo APP;