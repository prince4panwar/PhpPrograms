<?php
 
$favCol = array('Rahul' => 'Red','Shubham' => 'Green','Anuj' => 'yellow','Prince' => 'Black');

$Name = array('rahul', 'sahil', 'mohan');
echo $favCol['Anuj']."<br>";

foreach ($favCol as $key => $value) {
    echo "The favourite color of ".$key." is ".$value."<br>";
}
foreach($Name as $key => $value)
{
    echo $value;
}

?>