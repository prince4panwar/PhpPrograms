<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "princedb1";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("Sorry we failed to connect ".mysqli_connect_error());
}
else
{
    echo "Connection was successfull<br>";
}

$sql = "SELECT * FROM `employees` WHERE `Age` = '20'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;
 
echo " records found in the database <br>";

if($num>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['E.id'] ."          
        ".  $row['Name'] ."          ". $row['Age'];
        echo "<br>";
    }
}

$sql = "UPDATE `employees` SET `Name` = 'Ram' WHERE `Age` = '20'";
$result = mysqli_query($conn, $sql);

$rows=mysqli_affected_rows($conn);
echo "<br>Number of affected rows".$rows;

if($result)
{
    echo "<br> We Updated the record the successfully";
}
else
{
    echo "<br> We could not Updated the record the successfully";
}





?>