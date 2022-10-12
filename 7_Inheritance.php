<?php

require_once 'data/Manager.php';

$gisna = new Manager();
$gisna->name = "Gisna";
$gisna->sayHello("Jaka");

$dinda = new VicePresident(); // class VicePresident akan mempunya isi class yang sama dengan manager karena sifat pewarisan.
$dinda->name = "Dinda";
$dinda->sayHello("Kanda");
