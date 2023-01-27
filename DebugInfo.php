<?php

require_once "data/Student.php";

$student=new Student();
$student->id="1";
$student->name="Fajar";
$student->value=100;
$student->setClass("TI16");

var_dump($student);