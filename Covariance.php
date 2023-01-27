<?php

require_once "data/Food.php";
require_once "data/AnimalShelter.php";
require_once "data/Animal.php";

use Data\{CatShelter, DogShelter, AnimalFood};
$catShelter=new CatShelter();
$cat=$catShelter->adopt("Luna");
$cat->eat(new AnimalFood());

$dogShelter=new DogShelter();
$dog=$dogShelter->adopt("Doggy");
$dog->eat(new AnimalFood());