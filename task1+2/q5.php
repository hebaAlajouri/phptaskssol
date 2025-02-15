<?php
$fruits = array(
"d" => "lemon",
"a" => "orange",
"b" => "banana",
"c" => "apple");
ksort($fruits);
foreach($fruits as $fruit => $letter){
    echo $fruit . "=" . $letter . "</br>";
}