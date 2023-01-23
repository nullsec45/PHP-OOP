<?php

require_once "data/Student.php";

$student1=new Student();
$student1->id="1";
$student1->name="Fajar";
$student1->value=100;
$student1->setClass("TI16");
var_dump($student1);

// Cloning Object
$student2=clone $student1;

var_dump($student2);

// Cara manual clone 
// $student2=new Student();
// $student2->id=$student1->id;
// $student2->name=$student1->name;
// $student2->value=$student1->value;

