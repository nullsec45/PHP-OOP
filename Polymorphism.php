<?php
require_once "data/Programmer.php";

$company=new Company();
$company->programmer=new Programmer("Rama");
$company->programmer=new BackendProgrammer("Fajar");
$company->programmer=new FrontendProgrammer("Fadhillah");

sayHelloProgrammer(new Programmer("Rama"));
sayHelloProgrammer(new BackendProgrammer("Fajar"));
sayHelloProgrammer(new FrontendProgrammer("Fadhillah"));