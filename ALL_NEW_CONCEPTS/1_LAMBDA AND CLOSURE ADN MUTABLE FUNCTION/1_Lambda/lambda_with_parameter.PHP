<?php

#using parameter.

$lambda= function ($n)
{
  if($n<0){return 'Negative';}else{return 'Posative';}	 
 
}; // <- this semicolon is mandatory, unlike JavaScript
echo $lambda(-4);



?>