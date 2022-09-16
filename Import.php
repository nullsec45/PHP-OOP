<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

// Walau nama namespacenya berbeda, tidak bisa memanggil class yang sama menggunakan use keyword;
use Data\Conflict1\Conflict;
// use Data\Conflict2\Conflict; // akan error
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict=new Conflict();
// Jika tetap ingin menggunakan class yang sama, harus memanggil namespacenya di instancenya
$conflict2=new Data\Conflict2\Conflict();
helpMe();
echo APPLICATION.PHP_EOL;