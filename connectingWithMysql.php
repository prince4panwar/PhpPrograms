<?php
echo "We are ready to connect with the database <br>";
/*
way to connect with the database 
1.MYSQLi
2.PDO
*/

//Steps to connect with the mysqli

//1. Connecting with the database 
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

//3. Die if connection was not succesfull
if(!$conn)
{
    die("Sorry we failed to connect ".mysqli_connect_error());
}
else
{
    echo "Connection was successful";
}
?>



