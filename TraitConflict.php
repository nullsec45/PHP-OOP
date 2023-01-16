<?php

trait A{
    function doA():void{
        echo "a".PHP_EOL;
    }
    function doB():void{
        echo "b".PHP_EOL;
    }
}

trait B{
    function doA():void{
        echo "A".PHP_EOL;
    }

    function doB():void{
        echo "B".PHP_EOL;
    }
}

class sample{
    use A, B{
        // artinya prioritaskan Trait A daripada Trait B
        A::doA insteadof B;
        // artinya prioritaskan Trait B daripada Trait A
        B::doB insteadof A;
    }
}

// tidak bisa dijalnakan, karena ke dua trait memiliki function yang sama.
$sample=new Sample();
$sample->doA();
$sample->doB();
