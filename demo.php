<?php


// Declaring Constants in php
define("var1", "Working Now");

var_dump(var1);

const var2 = "86";

var_dump(var2);


// if-elseif-else
$marks = 75;

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} else  {
    echo "Grade: C";
}

//shorthand if-else
$a = 13;

$var3 = $a < 10 ? "Hello" : "Goodbye";  //If true "Hello", else "Goodbye"

echo "\n".$var3;

//shorthand if
$x = 5;
if ($x < 10) $var4 = "BullsEye!"; //If condition true, variable is equals to this, otherwise exit this code block.
echo "\n".$var4;

$a = 10; $b = 3;
echo $a + $b; // 13
echo $a - $b; // 7
echo $a * $b; // 30
echo $a / $b; // 3.333
echo $a % $b; // 1
echo $a ** $b;










?>