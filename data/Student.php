<?php

class Student{
    public string $id,
                  $name,
                  $value;
    
    private string $class;

    public function setClass(string $class):void{
        $this->class=$class;
    }

    public function __clone(){
        unset($this->class);
    }

    public function __toString():string{
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$arguments):void{
        $join=join(",", $arguments);
        echo "Invoike student with arguments $join".PHP_EOL;
    }

    public function __debugInfo(){
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->class
        ];
    }
}