<?php
$str = "<h1> Hello World </h1>";
$new_str = filter_var($str, FILTER_SANITIZE_STRING);
echo $new_str;
