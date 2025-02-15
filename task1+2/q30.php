<?php
function patt($n){
    for($i=1;$i<=$n;$i++){
        for($j=0;$j<$i;$j++){
            echo chr(65+$j) . " ";

        }
        echo "<br>";
    }
    for($i=$n-1;$i>=1;$i--){
        for($j=0;$j<$i;$j++){
            echo chr(65+$j) . " ";

        }
        echo "<br>";
    }
}
patt(5);
?>