<?php
$fptr = fopen("myfile.txt","r");
// echo fgets($fptr);//fgets gives the one line at a time 
// echo fgets($fptr);
// echo var_dump($fptr);


// while($a=fgets($fptr))//Reading a file line by line
// {
//     echo $a;
// }
// echo "End of the file has been reached";

// echo fgetc($fptr);//fgetc gives the one character at a time
while($a=fgets($fptr))//Reading a file line by line
{
    echo $a;
    if($a=='.')
        break;
}
fclose($fptr);




?>