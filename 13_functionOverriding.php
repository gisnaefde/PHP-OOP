<?php

require_once 'Data/Manager.php';

//functional ovverriding adalah menimpa function dari parent nya.
$manager = new Manager();
$manager->name="Gisna";
$manager->sayHello("Joko");

$VicePresident = new VicePresident(); //Meski VicePresident meruapakan child dari Manager, karena dengan functionoverriding,maka VicePresident akan menjalankan functionyya sendiri.
$VicePresident->name="Dinda";
$VicePresident->sayHello("Joko");