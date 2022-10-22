<?php

require_once 'Data/Conflict.php';
require_once 'Data/Helper.php';

//dengan import, jika kita ingin menggunakan namesapaces tidak perlu memanggil namespaces nya lagi, cukup dengan menggunakan use;

use Data\one\Conflict;
use function Helper\helpme;
use const Helper\APPLICATION;

$nama = new Conflict();
$nama->name = "Gisna EFDE";
echo "Name : $nama->name".PHP_EOL;

helpme();

echo APPLICATION;