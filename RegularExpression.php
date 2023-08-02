<?php
$matches=[];
$result=(bool)preg_match_all("/r|ama|faj|ar|faDh|Ill|Ah/i","Rama Fajar Fadhillah", $matches);

var_dump($result);
var_dump($matches);

$result=preg_replace("/anjing|bangsat/i","***","dasar lu anjing bangsat!");

var_dump($result);

$result=preg_split("/[\s,-]/","Ramaa Fajar Fadhillah-TI16, STT Terpadu Nurul Fikri");

var_dump($result);