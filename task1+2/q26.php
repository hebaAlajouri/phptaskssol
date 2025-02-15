<?php
function nextLetter($char){
    $ascii=ord($char);
    if($char==='z'){
        return 'a';
    }
    elseif($char==='Z'){
        return 'A';
    }
    else{
        return $chr($ascii+1);


    }
}
$input='a';
echo "Input: $input,Next Letter: " . nextLetter($input) . "</br>";
$input ='z';
echo "Input:$input,Next Letter: " . nextLetter($input) . "</br>";
$input ='M';
echo "Input: $input, Next Letter: " . nextLetter($input) . "</br>"; 