<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "princedb1";

$conn = mysqli_connect($servername, $username, $password, $database);

 if(!$conn)
 {
    die("We are having a problem. So we cannot connect with the database".mysqli_connect_error());
 }
 else
 {
    echo "We successfully connect with the database";
 }

 $sql = "DELETE FROM `employees` WHERE `Age` = '20' LIMIT 3";
 $result = mysqli_query($conn, $sql);
 $affected = mysqli_affected_rows($conn);

 echo "<br>Number of affected rows: $affected <br>";

 if($result)
 {
    echo "Delete Successfully";
 }
 else
 {
    $error = mysqli_error($conn);
    echo "Not Delete successfully due to this error ======> $error";
 }

?>