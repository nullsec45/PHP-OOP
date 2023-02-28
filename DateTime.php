<?php
$dateTime=new DateTime();
$dateTime->setDate(2003, 6, 30);
$dateTime->setTime(10,10,10,0);

// $dateTime->add(new DateInterval("P1Y"));

$minusOneMonth=new DateInterval("P1M");
$minusOneMonth->invert=true;
$dateTime->add($minusOneMonth);

// var_dump($dateTime);


$now=new DateTime();
// var_dump($now);

$now->setTimezone(new DateTimeZone("America/Toronto"));
// var_dump($now);

$date=DateTime::createFromFormat("Y-m-d H:i:s","2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));

if($date){
    var_dump($date);
}else{
    echo "Format Salah".PHP_EOL;
}