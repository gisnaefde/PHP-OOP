<?php  //constuctor ini merupakan sebuah fungsi yang akan pertama kali di panggil di 

require_once 'data/person.php';

$gisna = new Person("Gisna", "Tasikmalaya");

var_dump($gisna);
echo "nama :$gisna->name";
echo "alamat :$gisna->address";
echo "Negara :$gisna->country";