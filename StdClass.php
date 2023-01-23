<?php

// StdClass digunakan untuk konversi tipe data array ke object
$array=["firstName" => "Rama","middleName" => "Fajar", "lastName" => "Fadhillah"];

$object=(object)$array;

// var_dump($object);

// echo "First Name $object->firstName".PHP_EOL;
// echo "Middle Name $object->middleName".PHP_EOL;
// echo "Last Name $object->lastName".PHP_EOL;

$arrayLagi=(array)$person;
// var_dump($arrayLagi);

require_once "data/Person.php";
$person=new Person("Fajar","Jakarta");
var_dump($person);

$arrayPerson=(array) $person;
var_dump($arrayPerson);
