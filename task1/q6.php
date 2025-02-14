<?php
$temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73
);
$average=array_sum($temp)/count($temp);

$temp = array_unique($temp);
sort($temp);

echo "Average Temperature is: " . $average . "</br>";
 echo "List of seven lowest temperatures:";
for($i=0;$i<5;$i++){
 echo $temp[$i] . ",";
}
echo "</br>";
$v=count($temp);
echo "List of seven highest temperatures:";
for($i=$v-1;$i >= $v - 7;$i--){
    echo $temp[$i] . ",";
}
echo "</br>";