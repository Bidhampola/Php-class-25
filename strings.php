<?php

$str = "PHP is here to stay man";
$arr = ['PHP','is','here','to','stay','man'];//after exploding - converts strings into arrays

$str1 = "PHP-is-here-to-stay-man"; //after imploding - converts array into a strin using a given separator

//string functions
echo "This string has " .strlen($str) ." length";
echo "<br />";

//panaroma noon  mum etc
echo str_repeat('Brian',5);

//explode
$test = explode(' ',$str);
echo "<br>";

print_r($test[0]);

echo "<br>";
$implod = implode('',$arr);
echo $implod;
