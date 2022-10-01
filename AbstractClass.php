<?php

require_once "data/Location.php";
use Data\{Location, City, Province, Country};

// Tidak bisa membuat instance dari abstract class
$location=new Location(); //Error

$city=new City();
$province=new Province();
$country=new Country();