<?php
session_start();
$_SESSION['username'] = "Prince";
$_SESSION['password'] = "123456";
echo "We have saved your session";
?>