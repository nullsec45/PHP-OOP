<?php
require_once "data/Manager.php";


$manager=new Manager();
$manager->name="Rama";
$manager->sayHello("Fatimah");

$vp=new VicePrecident();
$vp->name="Fatimah";
$vp->sayHello("Rama");

?>