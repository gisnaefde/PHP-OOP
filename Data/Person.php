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
}