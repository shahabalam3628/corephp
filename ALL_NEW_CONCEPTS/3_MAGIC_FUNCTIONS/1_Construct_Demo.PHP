<?php

/*
*Definition
*__construct() is autmmetically call when an object is created.
*/



Class ConstructDemo
{
   public function __construct()
   {
	   echo "Autmomatic Executed Construct When Object is Created Without Calling";
   }
}

$obj=new ConstructDemo(); 


?>