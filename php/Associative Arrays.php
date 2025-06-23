<?php

//Associative Arrays Declaration:

// $var3 = array("name"=>"Walee", "age"=>26, "cgpa"=>3.60, "workout"=>true);
// $var4 = [
//     "name" => "Walee",
//     "age" => 26,
//     "cgpa" => 3.60,
//     "workout" => true,
                             
//     2020 => "college",           //This way is not recommended
//     false => "unemployed"        //Comma is optional for last element
// ];

// var_dump($var3);
// print_r($var3);
// var_dump($var4);
// print_r($var4);



//Access Array Items:

// $array01 = [
//     "name" => "Walee",
//     "age" => 26,
//     "cgpa" => 3.60,
//     "workout" => true,
// ];
// echo $array01["age"];               //Both Single Quote & DOuble Quote works
// echo " ",$array01['name']," ", $array01['cgpa'];        //display multiple array alements
//                                           //Php don't support negative index [-1], 
//                                           //You have to Access last index element with end() function


//Update Existing Array items:

// $array01 = [
//     "name" => "Walee",
//     "age" => 26,
//     "cgpa" => 3.60,
//     "workout" => true,
// ];
// $array01["cgpa"] = 2.98;
// print_r($array01);



//Add Array items:

// $array01 = [
//     "name" => "Walee",
//     "age" => 26,
//     "cgpa" => 3.60,
//     "workout" => true,
// ];

// $array01["New_Key01"] = "Value01";     //Add single new Key-pair value at the end

// $array01 = array_merge($array01, [     // Add multiple Key-pair values, using 
//     "gender" => "male",                 //array_merge() overwrites existing keys, if the key names match.
//     "subscription" => "free"
// ]);

// $array01 += [
//     "Language" => "English",
//     "age"      => 30,         //Unlike array_merge(), the += operator keeps the original value if the key already exists.
// ];

// print_r($array01);




### Removing Array Items:

































?>