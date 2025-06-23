<?php


### Notes:

//current dates, times depends on which server PHP script is running. Also the settings of the OS.
//The PHP date() function formats a timestamp to a more readable date and time.



### Get a Date:
echo "Today is " . date("y/m/d") . "\n";    //Uppercase & Lowercase characters have different output
echo "Today is " . date("Y/M/D") . "\n";

echo "Today is " . date("y.m.d") . "\n";
echo "Today is " . date("y-m-D") . "\n";

echo "Today is " . date("l") . "\n";
echo "Today is " . date("Y") . "\n";


### Get a Time:
echo "Current time is " . date("h:i:s a") . "\n";


### Set specific Timezone:      (if your server location is different)
date_default_timezone_set("America/New_York");

echo "Timezone changed, Current time is " . date("h:i:s a") . "\n";



### Using mktime() : 
// SYNTAX:  mktime(hour, minute, second, month, day, year)

$var1 = mktime(11, 14, 54, 8, 12, 2014);                //Fixed time
echo "Created date is " . date("Y-m-d h:i:sa", $var1 . "\n");



### Convert String to Unix timestamp:    

// SYNTAX:  strtotime(time, now)
// PHP is quite clever about converting a string to a date, so you can put in various values

$var2 = strtotime("10:30pm April 15 2014");
echo "\nCreated date is " . date("Y-m-d h:i:sa", $var2 . "\n");

$d=strtotime("tomorrow");
echo  "\n" . date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "\n";












?>