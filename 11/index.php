<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    echo "Favorite color is " . $_SESSION["color"] . "<br>";
    echo "Favorite animal is " . $_SESSION["animal"];
    //unset just delete one $_SESSION
    //session_destory() delete all  sesion


    ?>
</body>

</html>