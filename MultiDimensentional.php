<?php
 $MultiDem = array(
                    array(1,2,3,4),
                    array(5,6,7,8,),
                    array(9,8,7,6));

// for ($j=0; $j < count($MultiDem); $j++) { 
//     echo var_dump($MultiDem[$j]);
// }

for ($i=0; $i < count($MultiDem); $i++)
{ 
    for ($j=0; $j < count($MultiDem[$i]); $j++) { 
        echo $MultiDem[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>