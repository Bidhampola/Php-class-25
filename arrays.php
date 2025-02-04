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



echo "<br>";


foreach($team as $data){
    echo "$data  <br>"; //1
  
}

//associative array
$test = ['name' => 'Jimmy','age'=>30,'address'=>'Kyanja','country' => 'Uganda'];
// var_dump($test['name']);

foreach($test as $key => $val){
    echo "$key === $val <br>";
}

//array function/methods
//array_map, array_sort,

// var_dump(in_array('James',$team));

//loop through
echo "<br>";
echo "find whether an item exists in an array <br>";

function isExist(){
    $team = array('jimmy','James',10); //indexed
    $res = null;

    foreach($team as $d){
        if($d === 'James'){
            $res = true;
            break;
        }
        else{
            $res = false;
        }

    // return ($d === 'James') ? true : false;

}
return $res;

}

//using for loop
function test(){
    $team = array('jimmy','James',10);
    $res = null;

    for($i = 0; $i < sizeof($team); $i++){
        $res = ($team[$i] == 10) ? 'its exists' : 'It does not exist';// ternary operator
    }
    return $res;
}

// echo isExist();
echo test();