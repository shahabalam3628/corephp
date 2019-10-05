<?php

/***
*Example of type hinting with a simple functions
***/



function  abc(array $array)  //Only Accept array type value;
{
	foreach($array as $data)
	{
		echo $data;
	}
}
$array=['id'=>1,'name'=>'Alam','college'=>'Nalanda'];

abc($array);




?>