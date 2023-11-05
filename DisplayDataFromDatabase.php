<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "princedb1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `employees`";
$result = mysqli_query($conn, $sql);


// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['E.id'] ."          ".  $row['Name'] ."          ". $row['Age'];
        echo "<br>";
    }
}
?>
