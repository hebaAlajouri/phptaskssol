<?php
function palindrome($str){
    $myString=strtolower($str);
    $reversedStr=strrev($myString);
    if($myString===$reversedStr){
        return "Yes,it is a palindrome.";

    }else{
        return "No, it is not a palindrome.";
    }
}
$inputString = "Eva, can I see bees in a cave?";
echo palindrome($inputString);
?>