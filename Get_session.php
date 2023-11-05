<?php
session_start();
if(isset($_SESSION['username']))
{
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your password is ". $_SESSION['password'];
    echo "<br>";
}
else
{
    echo "Please login to continue";
}

?>