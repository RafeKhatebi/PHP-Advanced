<?php
//PHP Date and Time 
// with timezone we can specific our zone that we are located in it right now.
date_default_timezone_set("Asia/Kabul");
echo "The time is  " . date("h:i: a") . "\n";
/**h is for hour 
 * i is for minute
 * a is for am or pm
 * s for seconds* 
 */
echo "Complete Time is equal to " . date("Y:F:d:h:i:sa") . "";
/**
 * Y is for Year
 * f is months in string
 * m is for int of month
 * d for day
 * */
