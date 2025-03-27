<?php
//PHP File Handling
readfile("file.txt");
echo "\n";
$myFile = fopen("file.txt", "r");
echo fread($myFile, filesize("file.txt"));
// echo fwrite($myFile,"ha ha ha ba ba ba da da da na na  na ");
fclose($myFile);
// We have 8 diffrfent modes for a file like r w x w++ and so on but we can make a new file with w mode in php 
//  w mean is write only like r for  read only. 

echo fopen("autoTestfile", "w");
