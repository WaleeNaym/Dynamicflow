<?php

//Indexed Arrays Declaration:

// $var1 = array("red", "green", 55, 2.82, true);   //Old syle php
// $var2 = ["red", "green", 55, 2.82, true];        //Short New Syntax

// var_dump($var1);
// print_r($var1);
// var_dump($var2);
// print_r($var2);


//Access Array Items:

// $array01 = ["red", "green", 55, 2.82, true]; 
// echo $array01[0];
// echo $array01[0], " ", $array01[3];             //display multiple arrays alements
//                                           //Php don't support negative index [-1], 
//                                           //You have to Access last index element with end() function


//Update Existing Array items:

// $array01 = ["red", "green", 55, 2.82, true];
// $array01[2] = "blue";               //Updating Multiple items not possible this way
// print_r($array01);


//Add Array items:

// $array01 = ["red", "green", "blue"];
// $array01[] = "purple";               //adds elemnt to last position.
// $array01[1] = "pink";               //Adds element to specific position
// print_r($array01);


// $array01 = ["red", "green", "blue"];
// array_push($array01, "purple", "pink", 55);   //Add multiple elements to the end of an array
// print_r($array01);



### Removing Array Items:

$array01 = ["red", "green", "blue"];   
array_pop($array01);                 //Removes the last item of an array. (indexed array only)
print_r($array01);



















?>