<?php 

function sum($a ,$b, $d){

    echo $a + $b + $d;
    
}

$numbers = [1,2];

sum(...$numbers, d:12);


// #example
// function sayHelloToName(string $name,string $seperator=null , string $surename){
//     echo " Hi ". $name.$seperator.$surename ;
// }

// sayHelloToName("Hamed", surename:"Yarandi", seperator:" ");