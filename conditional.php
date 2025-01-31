<?php
echo "testing";
//if else, if elseif... else
//switch
//match

//age analysis using if analysis
$age = 40;
if($age < 18){
    echo "Not eligible to vote";
}
elseif ($age < 70){
   echo "Eligible to vote";
}
else {
    echo "Do not vote";

}


// switch
// $age = 10;

switch($age){
    case 10:
        echo "Not eligible to vote";
        break;
    case 40:
        echo "Eligible to vote";
        break;
    case 90:
        echo "No voting";
        break;
    default:
        echo "No match for you!";
        break;

}


//match
echo 'VOTING ELIGIBILITY';

// $age = 30;
// $result = match($age){
//     30 => 'You can vote',
//     10 => 'You can not vote',
//     90 => 'No match for you'
// };

// echo $result;


