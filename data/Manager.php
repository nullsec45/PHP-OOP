<?php
class Manager{
    var string $name;

    function sayHello(string $name):void{
        echo "Hi $name, my name is manager $this->name".PHP_EOL;
    }
}

class VicePrecident extends Manager{
    function sayHello(string $name):void{
        echo "Hi $name, my name is vice precident $this->name".PHP_EOL;
    }
}

?>