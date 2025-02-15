<?php
function symb($scores){
    $average =array_sum($scores)/count($scores);
    if($average>=90){
        $grade='A';
    }elseif($average>=80){
        $grade='B';
    }elseif($average>=70){
        $grade='C';
    }elseif($average>=60){
        $grade='D';
    }else{
        $grade='F';
    }
    return$grade;
}
$scores =[60, 86, 95, 63, 55, 74, 79, 62, 50];
$grade=symb($scores);
echo "The student's grade is: " . $grade;
?>