<?php
$array=array(2,5,3,4,6,9,30,20,9);
$even=array();
$odd=array();
foreach($array as $elements)
{
  if($elements%2==0)
  {
    $even[]=$elements;
  }
  else
  {
    $odd[]=$elements;
  }
  
}
print_r($even);


?>