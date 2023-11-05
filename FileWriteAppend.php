<?php
// Writting to a file in php
$fptw = fopen("myfile2.txt","w");
fwrite($fptw,"This being writed to the file\n");
fclose($fptw);

// Appendign to a file in php
$fpta = fopen("myfile2.txt", "a");
fwrite($fpta, "This is being appended to the file");
fclose($fpta);
?>
