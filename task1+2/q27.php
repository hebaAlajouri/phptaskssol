<?php
$original="The brown fox";
$modified=substr_replace($original,"quick",3,0);
echo "Modified String: " . $modified . "<br>";
?>
<?php
$original="The brown fox";
$myarr=explode(" ",$original);
$first_word=$myarr[0];
echo $first_word;
