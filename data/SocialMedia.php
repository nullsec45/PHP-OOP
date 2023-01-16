<?php

class SocialMedia{
    public function __construct(){
        $this->name="Rama";
    }
}

class Facebook extends SocialMedia{
    public function __construct(){
        parent::__construct();
        $this->age="19";
    }
}

// final class artinya, class tidak bisa diturunkan lagi
final class Instagram extends SocialMedia{
    public function __construct(){
        parent::__construct();
    }
}

// error tidak bisa extends ke final classs
// class IGBaru extends Instagram{

// }
$facebook=new Facebook();
$FakeFacebook=new Facebook();
$facebook->name;
echo $FakeFacebook->name.PHP_EOL;
echo $FakeFacebook->age;