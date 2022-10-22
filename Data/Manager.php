<?php

class Manager
{
    var string $name;

    function sayHello(string $name){
        echo "Haii $name, my name is Manager $this->name".PHP_EOL;
    }
}

class VicePresident extends Manager //class ini merupakan turunan dari class Manager, meski tidak ada isi, sebenarnya data nya ada karena mewarisi dari manager
{
    function sayHello(string $name){
        echo "Haii $name, my name is Vice President $this->name".PHP_EOL;
    }
}