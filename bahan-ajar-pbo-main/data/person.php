<?php

// membuat kelas person
class Person{
    // membuat properti
    var string $nama;

    // gunakan nullable properti
    var ?string $alamat = null;

    // gunakan default value untuk properti 
    var string $negara = "Indonesia";

    // buat function sayHello
    function sayHello(string $nama){
        echo "Hello $nama" . PHP_EOL;
    }

    // buat function sayHello nullable dengan percabangan
    function sayHelloNull(?string $nama)
    {
        if (is_null($nama)) {
            echo "Hi, my nama is $this->nama" . PHP_EOL;
        } else {
            echo "Hi $nama, my nama is $this->nama" . PHP_EOL;
        }
    }

    // buat const author
    const AUTHOR = "Kelas PBO A 23";

    // buat function info untuk self keyword
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    // buat function constructor
    function __construct(string $nama, ?string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // buat function destructor
    function __destruct()
    {
        echo "Object person $this->nama is Handsome" . PHP_EOL;
    }
}
