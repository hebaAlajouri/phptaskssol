<?php
$colors = array('white', 'green', 'red');
sort($colors);
$result = "<ul>";
$result .= "<li>" . $colors[0] . "</li>";
$result .= "<li>" . $colors[1] . "</li>";
$result .= "<li>" . $colors[2] . "</li>";
$result .= "</ul>";
echo $result;
?>

