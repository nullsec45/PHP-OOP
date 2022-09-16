<?php
class Person{
    const AUTHOR="ramarff";

    var string $name;
    var ?string $address;
    var string $country="Indonesia";   

    function __construct(string $name, ?string $address)
    {
        $this->name=$name;
        $this->address=$address;
    }
    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name is $this->name".PHP_EOL;
        }else{
            echo "Hi $name, my name is $this->name".PHP_EOL;
        }
    }

    function info(){
        // self digunakan untuk memanggil CONSTANTA di dalam Class
        echo "Author :".self::AUTHOR;
    }
}
// Mengakses CONST 
// CONST tidak dapat diakses menggunakan objectnya.
// Hanya bisa diakses melalui classnya.
echo Person::AUTHOR;

class Mobil{

}
class Motor{

}
?>