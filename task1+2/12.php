<?php
function ArmstongNum($num){
    $digits=str_split($num);
    $sumOfCubes=0;
    for($i=0;$i<count($digits);$i++){
        $sumOfCubes +=pow($digits[$i],3);

    }
    if($sumOfCubes == $num){
        return true;
    }
    else{
        return false;
    }
}
$number=407;
if(ArmstongNum($number)){

    echo $number . "is an Armstrong Number .";

}
else{
    echo $number . "is not an Armstrong Number .";

}
?>