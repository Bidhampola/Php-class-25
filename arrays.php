<?php
//arrays
$subjects = ['math','eng','sst','scie']; // indexed array
 echo count($subjects);

print $subjects[0]."<br/>";
print $subjects[1]."<br/>";
print $subjects[2]."<br/>";
print $subjects[3]."<br/>";

echo "<br/>";
echo gettype($subjects);
echo "<br />";

//while
$num = 1;
while($num <= 5){
    echo "Daniel"."<br/>";
    $num ++;
}

//do while
$num2 = 0;
do{
    echo "Brian"."<br/>";
    $num2 ++;

}while($num2 <= 2);


//for loop
for($num = 1; $num <=4; $num ++){
    echo "Daniel <br/>";
}

for($i = 0; $i < count($subjects); $i ++){
    echo $subjects[$i] ."<br />";
}

echo "Foreach <br>";
foreach($subjects as $data){
    echo $data ."<br/>";
}