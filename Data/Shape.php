<?php

namespace Data;

class Shape {
    function getCorner(){
        return 0;
    }
}

class Rectangle extends shape {
    function getCorner(){
        return 4;
    }

    function getParrentCorner(){
        return parent::getCorner();//dengan menggunakan syntax parrent,maka akan mereturn nilai si function si parrent
    }
}