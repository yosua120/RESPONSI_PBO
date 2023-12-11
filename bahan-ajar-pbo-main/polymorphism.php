<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Yosua");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Show");
var_dump($company);

sayHelloProgrammer(new Programmer("Yosua"));
sayHelloProgrammer(new BackendProgrammer("Yosua"));
sayHelloProgrammer(new FrontendProgrammer("Yosua"));