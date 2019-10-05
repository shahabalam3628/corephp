<?php

#without passing parameter.

$lambda= function ()
{
 $val= -2;
 if($val<0){return 'Negative';}else{return 'Posative';}	 
 
}; // <- this semicolon is mandatory, unlike JavaScript
echo $lambda();



?>