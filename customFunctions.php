<?php
//writing custom array functions
//a function that checks if an element exist in an array. it return true or false
    //element_in_array


    // algorithm
    //supply an element and an array
    //loop through the array and check if element is there
    //if elemenent is there return true else false

    function element_in_array($element,$arr = []){
        $result = 'null';
        for($i= 0; $i < sizeof($arr); $i++){
            if($arr[$i] == $element) {
                $result = true;
                break;
            }
            else {
                $result = false;
            }
        }
        return $result;
    }


    //using the function
    $marks = [49,20,29,20];

    $customFun = element_in_array(49,$marks);
    $phpFun = in_array(49,$marks);

    echo "Cusotm function : $customFun <br>";
    echo "Php function : $phpFun <br>";


    //Assignment
    //re-write function
    //1. arrar_push(inedexed arrays)
    //2. array_flip(associative array)
    //3. in_array(inedexed arrays),
    //4. array_pop(inedexed arrays),
    //5. sort(inedexed arrays)

?>
