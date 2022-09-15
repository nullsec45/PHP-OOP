<?php
require_once "data/Person.php";

$person=new Person();
$person->name="Rama Fajar Fadhillah";
// 
$person->sayHello("Ujang");

$person2=new Person();
$person2->name="Fatimah Aznur";
$person2->sayHello(null);
$person2->info();