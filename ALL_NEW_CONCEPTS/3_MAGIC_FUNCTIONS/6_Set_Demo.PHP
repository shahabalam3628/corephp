<?php

/*
*Definition
*__set() is autmmetically call when we try to update/change non exist or private properties/datamember of classs.
*/




class SetDemo
{
    
	public $name="shahab";
	public function __set($name,$value)
	{
	   echo "The $name data member does not exist so we can't change ";
	}
}

$ob=new SetDemo();
//True Statement becouse name data member is exist in class.
//echo $ob->name="khan";



//Wrong Statement becouse name2 data member does not exist then __set() automatic call.
echo $ob->name2="Aman";


?>