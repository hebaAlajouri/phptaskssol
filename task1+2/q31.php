<?php
function generaterand($min,$max,$count){
    $numbers=range($min,$max);
    shuffle($numbers);
    $randNum=array_slice($numbers,0,$count);
    echo implode(" ",$randNum);

}
generaterand(11,20,10);
?>