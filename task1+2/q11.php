<?php
function swap2num(&$x,&$y){
    /*To fix this and make the changes reflect in the original variables, you need to pass the variables by reference. You can do this by adding the & symbol in the function's parameter list. */
$temp=$x;
$x=$y;
$y=$temp;
}
$x = 12;
$y = 10;
echo "Before swapping: x = $x, y = $y <br>";
swap2num($x,$y);
echo "After swapping: x = $x, y = $y";