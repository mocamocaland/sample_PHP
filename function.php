<?php

function sayComment($name = "moca") {
    //echo "Hi! $name<br>";
    return "Hi! $name<br>";
}

sayComment("mocamoca");
sayComment("Tom");
sayComment();

$s = sayComment();
var_dump($s);