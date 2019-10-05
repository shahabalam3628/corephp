<?php

/*
*Definition
*__desstruct() is autmmetically call when an .
*/


Class ConstructDemo
{
   public function __construct()
   {
	   echo "Autmomatic Executed Construct When Object is Created Without Calling"."<br>";
   }
   public function __destruct()
   {
      echo "Automatic Call Destruct";
   }
}

$obj=new ConstructDemo(); 


?>