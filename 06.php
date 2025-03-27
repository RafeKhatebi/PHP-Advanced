<?php
// PHP Copy() Functions
copy("01.php", "02.php");
if (file_exists("05.php")) {
    echo "FILE IS EXIST!";
} else {
    echo "FILE ISNOT EXIST!";
}
echo file_exists("05.php"); // it'll print 1 bexause 05.php is exist.
// single mkdir
mkdir("test01");
// mkdir file to in to 
mkdir("test/testA/test01", "0777", true);
// Rename
rename("file.txt","B.txt");
// for delete  a file
unlink("B.txt");
//rmdir
rmdir("test");