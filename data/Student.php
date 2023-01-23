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
    
}