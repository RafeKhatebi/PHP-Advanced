<?php
// check that ip is valid or no 

$ip = "127.96.16.252";
if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo " $ip . is not a vlaid ip adress";
} else {
    echo " $ip . is a vlaid ip adress";
}
echo "\n";
// check email
$email = "khatebi2003@gmai.com";
// $email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "Email is not validate.";
} else {
    echo "Email is  validate.";
}
echo " \n";
//check validation of url 
$url = "https://www.me.ir";
if (filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo "$url . is a valid url.";
} else {
    echo "$url . is not  a valid url.";
}
