<?php
namespace Data;
    class Product{
        protected string $name;
        private int $price;
    
        public function __construct(string $name, int $price)
        {
            $this->name=$name;
            $this->price=$price;    
        }
    
        public function getName():string{
            return $this->name;
        }
    
        
        public function getPrice():string{
            return $this->price;
        }
    }

    
    class Asus extends Product{
        public function info(){
            echo "Nama produk $this->name".PHP_EOL;
        }
    }

