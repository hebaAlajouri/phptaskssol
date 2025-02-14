<?php
function checkSum($num1,$num2){
    $sum=$num1+$num2;
    if($sum===30){
        echo $sum;
    }
    else{
        echo "false";
    }
}
checkSum(10,10);
?>