<?php
//string first
// $age = 40;
$fname = 'Brian $age';  //single
$lname = "Bidha $age";  //double

echo $fname ."<br />";
echo $lname ."<br />";

//herodoc and nowdoc
//herodoc behaves like double quotes while nowdoc behaves like single quotes

//HERODOC
$ag = 40;
$t = 'tired';
$herodoc = <<<"TEXT"
     <p>Welcome to herodoc</p>
    <p>Welcome to herodoc</p>
    <h4>Jimmy left at lunch at time because he was $t</h4>
TEXT;

//nowdoc
$nowdoc = <<<'body'
<p>Welcome to nowdoc</p>
    <p>Welcome to nowdoc</p>
    <h4>Jimmy left at lunch at time because he was $t</h4>
body;

echo $herodoc;
echo "\n";

echo $nowdoc;
