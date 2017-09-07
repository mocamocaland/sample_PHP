<?php

$x = 5.6;

echo ceil($x)."<br>"; //6
echo floor($x)."<br>";//5
echo round($x)."<br>";//6
echo rand(1, 10)."<br>";

$s1 = "hello";
$s2 = "モカ";
echo strlen($s1)."<br>";//5
echo mb_strlen($s2)."<br>";//2

printf("%s - %s - %.3f", $s1, $s2, $x);

$colors = ["red", "blue", "pink"];

echo count($colors)."<br>";
echo implode("@", $colors);