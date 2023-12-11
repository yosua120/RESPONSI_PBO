<?php

// Buat namespace
namespace Oke;

// Import data dari conflict namespace
require_once "data/conflict.php";
use Data\One\conflict;

// Buat objek dari namespace yang dibuat
$person1 = new conflict("Yosua");
$person1 -> sayHello();

// Import data dari Helper namespace
require_once "data/helper.php";
use function Helper\helpMe;
use const Helper\APPLICATION;

// Tampilkan helper menggunakan echo
echo APPLICATION . PHP_EOL;

// Masukkan Helper\helpMe();
helpMe();
