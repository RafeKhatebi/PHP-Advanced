<?php
function my_callback($item)
{
    return strlen($item);
}
$array = ["Apple", "orange ", "Bannana"];
array_map("my_callback", $array);
print_r($length);
