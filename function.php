<?php
    //functions

    //parametless function
    function greeting(){
        echo "How are you";
        echo "<br>";
        echo "How do you do";

    }
    //call the function
    greeting();  //function call  function invocation
    

    //functions with parameter
    function addNumbers($num1,$num2){ //$num1,$num2 => parameters/placeholder
        echo $num1 + $num2;
    }

    //call
    echo "<br>";
    addNumbers(5,4); // 2,4 are arguments or values
?>
