<?php

require_once 'data/Person.php';

$Properties = new Person(); //Untuk memanggil Properties yang ada di class person gunakan tanda -> kemudian nama properties nya.
$Properties->name = "Gisna Fauzian Dermawan";
$Properties->address = "Kuala Lumpur";
$Properties->country="Malaysia";

echo "Name : $Properties->name".PHP_EOL;
echo "Address : $Properties->address".PHP_EOL;
echo "Country : $Properties->country".PHP_EOL;

$Properties2 = new Person();
$Properties2->name = "Adinda";
$Properties2->address = "Jakarta";
$Properties2->country = "Indonesia";

echo "Name : $Properties2->name".PHP_EOL;
echo "address : $Properties2->address".PHP_EOL;
echo "Country : $Properties2->country".PHP_EOL;

?>