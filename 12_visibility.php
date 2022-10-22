<?php

require_once 'Data/Product.php';

//Privat hanya bisadi akses di dalam class
//protected bisa di akses di dalam class dan di dalam turunannya.
//public bisa di akses di seluruhnya.

//privat bisa di akses di luar class dengan cara membuat public function dan memanggilnya di file yang diinginkan. contohnya dibawah ini

$data = new Product("Apple",20000);

echo $data->getname();
echo $data->getprice();

$dummy = new ProductDummy("Nanas" , 5000);
$dummy->info();
