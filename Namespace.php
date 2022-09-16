<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1=new Data\Conflict1\Conflict();
$conflict2=new Data\Conflict2\Conflict();

echo Helper\APPLICATION.PHP_EOL;
Helper\helpMe();