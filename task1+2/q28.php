<?php
function fibonacci($n){
    $num1 =0;
    $num2 =1;
    echo "$num1, $num2";
    for($i=2;$i<$n;$i++){
        $next=$num1+$num2;
        echo ", $next";
        $num1=$num2;
        $num2=$next;

    }
}
$n=10;
echo "Fibonacci sequence: ";
fibonacci($n);
?>