<?php
require_once "data/Person.php";

$person=new Person();
$person->name="Rama Fajar Fadhillah";
$person->sayHello($person->name);