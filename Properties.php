<?php
require_once "data/Person.php";

$person=new Person();
$person->name="Rama Fajar Fadhillah";
$person->address="Jl.Kondangan 1";
$person->country="Indonesia";
var_dump($person);

echo "Nama     : $person->name".PHP_EOL;
echo "Address  : $person->address".PHP_EOL;
echo "Country  : $person->country".PHP_EOL;

$person -> name=[];