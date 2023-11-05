<?php

$fptr = fopen("myfile.txt","r");//this used to open the file 'r' is read mode here and $fptr is file pointer
//echo var_dump($fptr);
if(!$fptr)
    die("Unable to open this file. Please enter a valid filename");
$content = fread($fptr, filesize("myfile.txt"));//this is used to read the content of the file
echo $content;
fclose($fptr);


?>
