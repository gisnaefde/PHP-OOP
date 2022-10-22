<?php

//name space uni bersifat nested (bersarang)
//namesapce digunakan ketika kita membutuhkan dua class dengan nama yang sama, dengan adanya namespaces kita dapat membuat class yang sama tetapi
//dalam direktori yang berbeda, contohnya seperti class conflict dibawah ini.

namespace Data\one{
    class Conflict
    {
        var string $name;
    }
}

namespace Data\two {
    class conflict
    {
        var  $umur;
    }
}



