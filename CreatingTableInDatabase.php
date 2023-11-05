<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "princedb1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
    die("Sorry we failed to connect ".mysqli_connect_error());
else
    echo "Connection was successful <br>";

$sql = "CREATE TABLE `table5` (`Rollno` INT NOT NULL , `Name` INT NOT NULL , `Class` INT NOT NULL )";

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
