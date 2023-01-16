<?php

namespace Data\Traits;

trait SayGoodBye
{
    public string $name;
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

// Jika class memiliki parent class, maka yang akan dioverride adalah parent classnya oleh trait.
// Namun, jika class tidak memiliki parent, yang akan dioverride adalah traitnya
class ParentPerson{
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }
    public function hello(?string $name): void
    {
        echo "Hello in person" . PHP_EOL;
    }
}

class Person extends ParentPerson
{
    use SayGoodBye, SayHello, HasName, CanRun{
        // override visibilitynya
        hello as private;
        goodBye as private;
    }

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
