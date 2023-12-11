<?php

//memamnggil fungsi dari file yang berbeda
require_once "data/conflict.php";
require_once "data/helper.php";

//menggunakan fungsi dari file yang berbeda
use Data\One\conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

//memasukkan sebuah value yang akan dipanggil(yang telah tersusun di file yang dipanggil)
$conflict1 = new conflict("Yosua");

//memanggil value untuk ditampilkan
$conflict1->sayHello();
helpMe();
echo APPLICATION . PHP_EOL;
?>  