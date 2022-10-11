<?php

require 'Data/Person.php';


$gisna = new Person();
$gisna->nama = "Gisna";
$gisna->sayHello("Budi");

$fauzian = new Person();
$fauzian->nama = "Fauzian";
$fauzian->sayHello(null);

?>