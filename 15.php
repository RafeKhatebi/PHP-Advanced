<?php
function divison(int $x, int $y)

{
    if ($y == 0) {
        throw new Exception("Error in if ");
    }
    return $x / $y;
}
try {
    echo divison(6, 0);
} catch (Exception $e) {
    echo $e->getMessage();
    echo "  \n Error";
} finally {
    echo  " \n finally always done!";
}
