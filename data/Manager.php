<?php
class Manager{
    var string $name;
    var string $title;

    public function __construct(string $name="", string $title="Manager")
    {
        $this->name=$name;
        $this->title=$title;
    }

    function sayHello(string $name):void{
        echo "Hi $name, my name is manager $this->name".PHP_EOL;
    }
}

class VicePrecident extends Manager{
    public function __construct(string $name="")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }
    function sayHello($name):void{
        echo "Hi, my name is vice precident $this->name".PHP_EOL;
    }
}

?>