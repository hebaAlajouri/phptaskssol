<?php
$characters='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$shuffled=str_shuffle($characters);
$password=substr($shuffled,0,8);
echo "Generated Password:" . $password;
?>