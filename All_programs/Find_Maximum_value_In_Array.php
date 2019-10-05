<?php

// Find The Maximum Value


$array=array(3,333,7,296,4,10);
$max_value=0;

for($i=0;$i<count($array);$i++)
{
	
      if($array[$i]>$max_value)
	  {
	    $max_value=$array[$i];
	  }
   
}

echo "Maximum Value From Array is=".$max_value; 




?>