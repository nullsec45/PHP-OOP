<?php
require_once "data/SayGoodBye.php";

use Data\Traits\Person;

$person = new Person();
$person->goodBye("Joko");
$person->hello("Budi");

$person->name = "Fajar";
var_dump($person);

$person->run();
