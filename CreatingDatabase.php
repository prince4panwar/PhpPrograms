<!-- here we discuss everything about how do we create database and connect with the database -->
<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
    die("Sorry we failed to connect ".mysqli_connect_error());
}
else
{
    echo "Connection was successful <br>";
}


$sql = "CREATE DATABASE princedb20";
$result = mysqli_query($conn, $sql);

 if($result)
 {
     echo "The database is created succesfully <br>";
 }
 else
 {
     echo "The database is not created succesfully because of this eroor ------->". mysqli_error($conn);
 }

?>