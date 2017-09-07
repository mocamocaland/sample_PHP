<?php

$sales = [
    "tanaka" => 400,
    "yamamoto" => 600,
    "mocamoca" => 1000,
];

foreach ($sales as $key => $value) {
    echo "($key) $value ";
}

$colors = ["red", "blue", "pink"];

foreach ($colors as $value) :
    echo "$value ";
endforeach;