<?php
require_once "data/Product.php";
use Data\{Product, Asus};

$product=new Product("Apple", 300000);
$asus=new Asus("Asus Zenbook", 6000000);

echo $product->getName().PHP_EOL;
echo $product->getPrice().PHP_EOL;
echo $asus->info().PHP_EOL;