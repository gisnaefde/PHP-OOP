<?php

class Product {
    // private string $name; //privat bisa di akses di luar class dengan cara membuat public function dan memanggilnya di file yang diinginkan.
    // private int $price;

    protected string $name; // protected digunakan agar si anak bisa menggunkana variable, dibawah mProductDummy merupakan anak dariproduct
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():string{
        return $this->name.PHP_EOL;
    }

    public function getPrice():int{
        return $this->price.PHP_EOL;
    }

}

class ProductDummy extends Product{
    public function info(){

        echo "Nama : $this->name2";
        echo "Price : $this->price2";
    }
}