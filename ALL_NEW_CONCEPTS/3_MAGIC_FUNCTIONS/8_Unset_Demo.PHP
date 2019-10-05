<?php

class UnsetDemo
{
   private  $array2=array('name'=>'shahahb','class'=>'MCA','roll'=>20);
   
   public function __get($name)
   {
     echo "You are trying Non Exist or Private Property";
   }
   public function __unset($name)
   {
	   unset($this->array2[$name]);
   }
}
$ob=new UnsetDemo();

//unset($ob->name);
echo $ob->name;



?>