<?php
$numbers=range(1,10);
echo implode("-",$numbers) . "<br>";
//another way
$output="";
for($i=1;$i<=10;$i++){
    $output .=$i . "-";
}
$output=rtrim($output,"-");
echo $output;
?>