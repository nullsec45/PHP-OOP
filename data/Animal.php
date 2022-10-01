<?php

namespace Data;
abstract class Animal{
    public string $name;
    
    // tidak boleh mengisi body di abstract function milik parent class
    abstract public function run(): void;
}

class Cat extends Animal{
        public function run():void{
            echo "Cat $this->name is running".PHP_EOL;
        }
}


class Dog extends Animal{
    public function run():void{
        echo "Dog $this->name is running".PHP_EOL;
    }
}