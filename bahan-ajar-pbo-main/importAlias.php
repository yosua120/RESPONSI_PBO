<?php

//memamnggil fungsi dari file yang berbeda
require_once "data/conflict.php";
require_once "data/helper.php";

//menggunakan fungsi dari file yang berbeda
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

//memasukkan sebuah value yang akan dipanggil(yang telah tersusun di file yang dipanggil)
$conflict1 = new Conflict1("Febrian");
$conflict2 = new Conflict2("Yosua");

//memanggil value untuk ditampilkan
$conflict1 -> sayHello();
$conflict2 -> sayHello();
help();
echo APP . PHP_EOL;