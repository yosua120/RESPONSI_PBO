<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$yos = new Person("Yosua", "bengkulu");

// tambahkan value nama di object
$yos->nama = "Yosua";

// panggil function sayHelloNull dengan parameter
$yos->sayHelloNull("Yos");

// buat object dari kelas person
$yoi = new Person("Yosua", "Jakarta");

// tambahkan value nama di object
$yoi->nama = "Yos";

// panggil function sayHelloNull dengan parameter null
$yoi->sayHelloNull(null);
