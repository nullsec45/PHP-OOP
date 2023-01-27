<?php
class Zero{
    private array $properties=[];

    public function __get($name){
        // echo "Access property $name".PHP_EOL;
        return $this->properties[$name];
    }
    
    public function __set($name, $value){
        // echo "Set property $name with value $value".PHP_EOL;
        $this->properties[$name]=$value;
    }

    public function __isset($name):bool{
        // echo "Isset $name".PHP_EOL;
        return isset($this->properties[$name]);
    }

    public function __unset($name){
        // echo "Unset $name"; 
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments){
        $join=join(",", $arguments);
        echo "Call function $name with arguments $join".PHP_EOL;
    }

    public static function __callStatic($name, $arguments){
        $join=join(",", $arguments);
        echo "Call static function $name with arguments $join".PHP_EOL;
    }
}

$zero=new Zero();
$zero->firstName="Rama";
$zero->middleName="Fajar";
$zero->lastName="Fadhillah";

echo "First Name : $zero->firstName".PHP_EOL;
echo "Middle Name : $zero->middleName".PHP_EOL;
echo "Last Name : $zero->lastName".PHP_EOL;

// unset($zero->firstName);
// isset($zero->firstName);
$zero->sayHello("Rama","Fajar");
Zero::sayHello("Rama","Fajar");
?>