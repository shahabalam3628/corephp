<?php

// Find The Maximum Value


$array=array(3,333,7,296,4,10);
$reverse_array=array();

for($i=count($array)-1 ;$i>0;$i--)
{
	$reverse_array[]=$array[$i];
   
}

print_r($reverse_array);


?>