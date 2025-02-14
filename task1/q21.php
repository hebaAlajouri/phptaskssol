<?php
$numericString='085119';
$hours= substr($numericString,0,2);
$minutes= substr($numericString,2,4);
$seconds= substr($numericString,4,6);
$formattedTime=$houres . ':' . $minutes . ':' . $seconds;
echo $formattedTime;
?>