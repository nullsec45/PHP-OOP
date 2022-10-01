<?php
require_once "data/Manager.php";


$manager=new Manager("Rama","Manager");
$manager->sayHello("Fatimah");

$vp=new VicePrecident("Fatimah","Vice Precident");
$vp->sayHello("Rama");

?>