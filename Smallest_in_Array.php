<?php

// Find The Minimum Value from Array

$array=array(4,5,2,5,7,7);
$smallest_value=100;

for($i=0;$i<=count($array)-1;$i++)
    {
	   if($array[$i]<$smallest_value)
	   {
		   $smallest_value=$array[$i];
	   }
    }

echo $smallest_value;


?>