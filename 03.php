<?php

//Create a date from a string with strtotime() -->
//01 example:
$d = mktime(11, 36, 25, 3, 24, 2025);
echo " 1st Create Date is " . date("Y-m-d h:i:s a", $d);
//02 example:
$da = strtotime("11:46am March 24 2025");
echo "\n" . " 2nd Create Date is " . date("Y-m-d h:i:s a", $da);
//03 example:
$dat = strtotime("tomorrow");
echo "\n" . " 3rd Create Date is " . date("Y-m-d h:i:s a", $dat);
// 04 EXAMPLE:
$dat4 = strtotime("next Sunday");
echo "\n" . " 4th Create Date is " . date("Y-m-d h:i:s a", $dat4);

// 05 EXAMPLE:
$dat5 = strtotime("+3 months");
echo "\n" . " 5th Create Date is " . date("Y-m-d h:i:s a", $dat5);

// 06 EXAMPLE:
$dat6 = strtotime("+5 Year");
echo "\n" . " 6th Create Date is " . date("Y-m-d h:i:s a", $dat6);

// 07 EXAMPLE:
$dat7 = strtotime("next year");
echo "\n" . " 7th Create Date is " . date("Y-m-d h:i:s a", $dat7);

// 08 Example:
$t = time();
echo $t . "\n";
echo date("Y-m-d h:i:s a", $t);

/* 09 Example:
 startdate is saturday
 enddate is 6 weeks after saturday*/
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);
while ($startdate < $enddate) {
    echo date("M d", $startdate) . "\n";
    $startdate = strtotime("+1 week", $startdate);
}

// 10 Example:
$d1 = strtotime("April 04");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo    "There are "  . $d2 . " days until 4th of july.";
