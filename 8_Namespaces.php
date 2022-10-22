<?php

require_once 'Data/Conflict.php';

$Gisna = new \Data\one\Conflict(); //untuk pemanggilan namespaces harus diikuti dengan tempat namespaces itu berada.
$Gisna->name ="Gisna";

echo "Nama : $Gisna->name".PHP_EOL; 

$Umur = new \Data\two\Conflict ();
$Umur->umur = 20;

echo "Umur : $Umur->umur";
