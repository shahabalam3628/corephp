<?php

/*
*Definition
*__get() is autmmetically call when we try to call non exist or private properties/datamember of classs.
*/



class GetDemo
{
     public $name="Shahab";
	 public function __get($name)
	 {
       echo "The $name data mamber not Exist in this classs";
	 }
}

$ob=new GetDemo();
//True Statement.
//echo $ob->name;


//Wrong Statement.
echo $ob->name2;  //Becouse name2 data member does not exist isliye __get() autmoatic execute ho jayega.


?>