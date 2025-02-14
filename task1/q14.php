<?php
function removeDuplicates($array){
    return array_unique($array);

}
$array1=array(2,4,7,4,8,4);
$array1=removeDuplicates($array1);
print_r($array1);
?>