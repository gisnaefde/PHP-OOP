<?php 

//berbeda dengan construction, destruction akan di jalankan ketika object di hapus dari memory,
//Destructor ini biasanya digunakan untuk memutuskan koneksi ke database ketika alikasi selesai digunakan, agar koneksinya tidak menggantung tersu di database

require_once "data/person.php";

$gisna = new Person("gisna", "Tasikmalaya");
$fauzian = new Person("fauzian", "Subang");

echo "Aplikasi ditutup".PHP_EOL; // kode ini akan di jalankan terlebih dahulu, setelah itu baru memanggil destructor yang diatas
