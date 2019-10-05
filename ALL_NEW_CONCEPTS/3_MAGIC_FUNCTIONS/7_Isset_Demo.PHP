<?php

/*
*Definition
*__isset() is autmmetically call when we try to check non exist or private properties/datamember of classs.
*/



class IssetDemo
{
   public $name="Shahab";
   public function __isset($name)
   {
      echo "Non Exist Property $name";
   }
   
}


$ob=new IssetDemo();
//True Statement.
//isset($ob->name);


//Wrong Statement

isset($ob->name2)
?>