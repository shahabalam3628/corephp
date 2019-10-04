<?php
//Reverse string without using php function_exists

$name="shahab";

$len=strlen($name)-1;


while($len>=0)
{
	$upper=$name+32;
	$len--;
}
echo $upper;

?>