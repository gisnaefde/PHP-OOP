<?php

require_once 'data/person.php';

$gisna = new Person("Gisna", "Tasikmalaya");

var_dump($gisna);
echo "nama :$gisna->nama";
echo "alamat :$gisna->address";
echo "Negara :$gisna->country";