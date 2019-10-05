<?php
Class Find_Largest
{
	
	public function find_lasget_value($numbers)
	{
	   $max_value=0;
	   for($i=0;$i<count($numbers)-1; $i++)
	   {
		   if( $numbers[$i] > $max_value)
		   {
			   $max_value=$numbers[$i];
		   }
	   }
    return $max_value;   
	}
}

$obj=new Find_Largest();
$numbers=array(30,40,60,10,900,30);
$result=$obj->find_lasget_value($numbers);
echo $result;