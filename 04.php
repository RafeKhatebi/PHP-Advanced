<?php
//PHP include file
// php include and require statements
// we use include when the file that we import is not very important to avoid acted other codes.
// we use require when the file that we import is necessory for our application and should be there the code.
include("02.php");
require("02.php");
include("Include.php");
// The bottom code will take a fatal error because the file is not exist.
require("Require.php");
