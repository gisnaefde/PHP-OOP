<?php

class Manager
{
    var string $name;

    function sayHello(string $name){
        echo "Haii $name, my name is $this->name".PHP_EOL;
    }
}

class VicePresident extends Manager //class ini merupakan turunan dari class Manager, meski tidak ada isi, sebenarnya data nya ada karena mewarisi dari manager
{

}