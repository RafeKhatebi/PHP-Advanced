<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    $_SESSION["color"] = "Blue";
    $_SESSION["animal"] = "Horse";
    echo"Session variables are set.";


    ?>
</body>

</html>