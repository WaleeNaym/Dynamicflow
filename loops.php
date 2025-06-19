<?php


//Switch Statement:
// $fav_color = "blue";

// switch ($fav_color) {
//     case "red":
//         echo "Your favourite color is red";
//         break;
//     case "blue":
//         echo "Your favourite color is blue";
//         break;
//     case "green":
//         echo "your favourite color is green";
//         break;
//     default:
//         echo "Wrong Answer!";
// }


// For Loops:
// for ($i=0; $i<=5; $i++){
//     echo "Number is: $i\n";
// }

// for ($i=5; $i>=1; $i--){
//     echo "$i...";
// }
// echo "Let's fly!";


//Using continue & Break with for loop:
// for ($i=1; $i<=6; $i++) {
//     if($i == 3) continue;   //Don't execute rest of code, Continue next iteration
//     if($i == 5) break;      //break out of loop when condition met
//     echo "$i\n";
// }


// While Loops:
// $i = 0;

// while ($i < 5) {             //Run as long as condition is true
//     echo "Number: $i \n"; 
//     $i++;
// }


// $i = 0;
// while ($i<100) {
//     $i += 10;           //increment by 10
//     echo "$i\n";
// }


//Using continue & Break with While loop:
// $i = 0;
// while ($i <=6) {
//     $i++;                   

//     if($i == 3) continue;   //Don't execute rest of code, Continue next iteration
//     if($i == 5) break;      //break out of loop when condition met

//     echo "$i\n";            //i is printed after increment, that's why starts from 0
// }



//Do While loop:
// $i = 1;

// do {                      //Do while will run at least once, even when condition is FALSE
//     echo "Number: $i\n";
//     $i++;
// } while ($i <= 5);


//Using continue & Break with Do While loop:

// $i=1;
// do {
//     if ($i == 5) break;        //if-else shorthand
//     echo "$i\n";
//     $i++;
// } while($i<=6);

// $i=0;
// do {
//     $i++;                     //In Do-While, i++ loop counter must be placed before continue statement
//     if ($i == 3) continue;        //if-else shorthand
//     echo "$i\n";
// } while($i<=6);                 //Code is executed 1 extra time, because while i=6 execute again



//ForEach Loop for Indexed Array:
// $items = ["red", "green", 55, 2.82, true];  

// foreach($items as $item){                   //Iterate through each index, starting from index 0.
//   echo "Items are: $item\n";
// }



// //ForEach Loop for Associative Array:
// $users = [
//     "name" => "Walee",
//     "age" => 26,
//     "cgpa" => 3.60,
//     "workout" => true,
                              
//     2020 => "college",            //This way is not recommended
//     false => "unemployed"
// ];

// foreach($users as $key => $value){        //Two new temp variables are be created here
//   echo "$key : $value\n";

//   // var_dump("$key\n");            //Data type on both side get's converted to string. Don't know why
//   // var_dump("$value\n");          
// }
// var_dump($users);                   //Outside of foreach loop, array elements data type shows as it is. Don't know why.



