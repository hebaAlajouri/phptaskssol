<?php
$num = array(1, 2, 3, 4);
array_splice($num, 2, 0, "$"); 

for ($i = 0; $i < count($num); $i++) {
    echo $num[$i] . "<br>"; 
}
?>
