<?php

require_once "data/Product.php";

$product = new Product("Jambu", 20000);

// tampilkan product get name
echo "Nama Buah\n" . $product->getName() . PHP_EOL;

// tampilkan product get price
$product->getPrice();
echo "Harga Buah\n" . $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Apel", 1000);
$dummy->info();