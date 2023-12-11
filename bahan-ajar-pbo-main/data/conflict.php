<?php

// buat namespace data\satu 
namespace Data\One;
// dengan class conflict
class conflict{
    //membuat sebuah variabel agar tidak dipublikasi
    private $name;

    //properti $name yang diinisialisasikan dengan konstruktor
    public function __construct($name){
        $this->name= $name;
    }

    //untuk mengambil value dari $name yang telah dibuat dan dapat dipublikasikan
    public function getName(){
        //mengembalikan nilai pada $this tipe data berbentuk string
        return $this->name;
    }

    //membuat fungsi untuk memanggil value $this->name
    public function sayHello(){
        echo "Hello, my name is {$this->name}" . PHP_EOL;
    }
}

// buat namespace data\satu 
namespace Data\Two;
// dengan class conflict
class conflict{
    //membuat sebuah variabel agar tidak dipublikasi
    private $name;

    //properti $name yang diinisialisasikan dengan konstruktor
    public function __construct($name){
        $this->name= $name;
    }

    //untuk mengambil value dari $name yang telah dibuat dan dapat dipublikasikan
    public function getName(){
        //mengembalikan nilai pada $this tipe data berbentuk string
        return $this->name;
    }

    //membuat fungsi untuk memanggil value $this->name
    public function sayHello(){
        echo "Hello, my name is {$this->name}" . PHP_EOL;
    }
}

?>



$result = $koneksi->query($sql);

if($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	if(password_verify($password, $row['password'])){
    	echo "Login Berhasil";
	}
	else{
		echo "password salah";
	}
}