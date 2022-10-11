<?php 

class Person
{
    var string $name; //Propertis//untuk membuat field di dalam class yang nantinya dapat di konsumsi oleh object, gunakan var sebelum nama field
    var ?string $address; //Fungsi tanda tanya yaitu sebagaian Nullable Properties, artinya tipe data itu string tetapi boeh juga null
    var string $country="German";// ini untuk default value, jika tidak diubah di object maka akan memanggil default nya.
    
    function sayHello (?string $nama){
        if(is_null($nama)){
            echo "Hai, my name is $this->nama".PHP_EOL; //this ini digunakan untuk mengakses object saat ini berada.
        }else{
            echo "Hai $nama, my name is $this->nama".PHP_EOL;
        }
    }


    const AUTHOR = "Gisna Fauzian Dermawan"; // constan ini tidak bisa di rubah nilainya di dalam object, jadi akan tersu menempel pada class nya

    function info(){
        echo "Author : ".self::AUTHOR.PHP_EOL; // karena const bersiapat tetap dan hanya bisa di akses melalui class ya saja, jadijika ingin memanggil constant dengan cara self::nama_variabel
    }
}