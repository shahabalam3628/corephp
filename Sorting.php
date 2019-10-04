<?php
$array=array(10,50,20,40,25,45);
$tmp='';
for($i=0;$i<count($array);$i++)
{
  for($j=0;$j<count($array)-1;$j++)
  {
	  if($array[$j]<$array[$j+1])
	  {
		  $tmp=$array[$j];
		  $array[$j]=$array[$j+1];
		  $array[$j+1]=$tmp;
	  }
  }
}
foreach($array as $sorted)
{
  echo $sorted.' ';
}

?>