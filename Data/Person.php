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


    const AUTHOR = "Gisna Fauzian Dermawan"; // constan ini tidak bisa di rubah nilainya di dalam object, jadi akan terus menempel pada class nya

    function info(){
        echo "Author : ".self::AUTHOR.PHP_EOL; // karena const bersipat tetap dan hanya bisa di akses melalui class ya saja, jadi jika ingin memanggil constant dengan cara self::nama_variabel
    }


    public function __construct(string $name , ?string $address) //constuctor ini merupakan sebuah fungsi yang akan pertama kali di panggil di 
    {
        $this->name = $name;
        $this->address = $address;
    }


    function __destruct() //berbeda dengan construction, destruction akan di jalankan ketika object di hapus dari memory,
    {
        echo "data $this->name asal $this->address telah di hapus".PHP_EOL;
    }
}