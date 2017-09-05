<?php 
echo 'Hello,php7<br>';
$meg = "hello from the top";


//echo var_dump($meg);
define("MY_EMAIL","xxxxx@example.jp");
echo MY_EMAIL."<br>";

var_dump (__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);

$x = 10 % 3;
$y = 30 / 7.5;
var_dump($x);
var_dump($y);

$z = 8;
$z--;
var_dump($z);

$name = "taguchi";
$s1 = "<br>hello {$name}!\nhello again!<br>";
$s2 = 'hello {$name}!\nhello again!';

var_dump($s1);
var_dump($s2);