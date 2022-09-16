<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

// Walau nama namespacenya berbeda, tidak bisa memanggil class yang sama menggunakan use keyword;
// Jika tetap ingin memanggil class yang sama menggunakan use keyword kita bisa mengganti nama classnya dengan keyword alias

use Data\Conflict1\Conflict as Conflict1;
use Data\Conflict2\Conflict as Conflict2; 
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict=new Conflict1();
$conflict2=new Conflict2();
help();
echo APP.PHP_EOL;