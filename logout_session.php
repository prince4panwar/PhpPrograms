<?php
//Start the session and get the data
session_start();
session_unset();
session_destroy();
echo "<br>We have been logged out";

?>