<?php

class Manager
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name){
        echo "Haii $name, my name is Manager $this->name".PHP_EOL;
    }
}

class VicePresident extends Manager //class ini merupakan turunan dari class Manager, meski tidak ada isi, sebenarnya data nya ada karena mewarisi dari manager
{
    public function __construct(string $name = "")
    {
        //tidak wajib tapi di rekomendasikan
        parent::__construct($name , "VicePresident" );
    }

    function sayHello(string $name){
        echo "Haii $name, my name is Vice President $this->name".PHP_EOL;
    }
}