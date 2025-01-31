<?php
//operators
// arithemetic / assignment / logical/ string /camprison / array/ increment,decrement operators

//arithmetic (+ - / * %)
$num1 = 8; $num2 = 2;
$age = $height = 20;

echo $num1 / $num2;
echo "<br>";

echo $num1 % $num2;
echo "<br>";

//checking if num is even or odd

$number = 67;

// = assignment
// == loose comparison
// === strict comparison

$weight1 = '20';
$weight2 = 20;

// '20' = 20;
if($weight1 === 20){
    echo "Almost the same";
}
else{
    echo "Exactly";
}

echo "<br>";

echo $weight1 + $weight2;
echo "<br>";

echo 'Dan is '. $weight1. 'kgs';
echo "<br>";




if($number % 2 === 0){
    echo $number .' is even';
}
else {
    echo $number .' is odd';

}

echo "<br>";
//logical !
$programmingLanguage = 'PHP';
    if(!$programmingLanguage){
        echo "Its not php";
    }
    else{
        echo "Yes its Php";
    }


//assignment =
//comparison ==  === > < >= <=
//logical != !== !



