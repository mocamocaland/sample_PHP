<?php

//真偽値
/*
文字列
空文字列、もしくは 0の文字列:false 
それ以外:true

数値
0 もしくは 0.0:false
それ以外:true

論理値:falseの場合

配列というデータ型
配列の要素の数が0:false
それ以外:true
*/
$x = 5;
if ($x){
    echo "great<br>";
}
/*
$x = 5;
if ($x == true){
    echo "great";
}
*/

$a = 1;
$b = 10;

$max = ($a > $b) ?  $a : $b;

if ($a > $b) {
    $max = $a;
} else {
    $max = $b;
}
echo $max;