<?php
//string first
$age = 40;
$fname = 'Brian $age';  //single
$lname = "Bidha $age";  //double

echo $fname ."<br />";
echo $lname ."<br />";

//herodoc and nowdoc
//herodoc behaves like double quotes while nowdoc behaves like single quotes

//herodoc

$sch = <<<SCH
Herodoc
<br>
my name is brian
<p>my age is $age</p>
SCH;

echo $sch."<br />";

//nowdoc
$hosp = <<<'HOSP'
NOWDOC
<p> My age is $age</p>
HOSP;

echo $hosp."<br />";
