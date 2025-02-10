<?php

    //dealing with arrays
    function test():array{
        $data = [];
        for($i =0; $i <=100; $i++){
        $data[] = $i;
        }
        return $data;
    }
    // print_r(test());

    //using generator

    function gen(){
        for($i=0; $i<=100; $i++){
            yield $i;
        }
    }

    // print_r(gen());
    foreach(gen() as $val){
        print_r($val);
        echo "\n";
    }
    
?>
