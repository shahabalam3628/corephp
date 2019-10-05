<?php

/*
*Definition
*__call() is autmmetically call when Non Exist or Private function is call.
*/




Class CallDemo
{
   public function add($a,$b)
   {
      return $a+$b;
   }
   public function __call($name,$array)
   {
	   echo "The $name Function Not Exist or Private Function And Your Parameter Value Below"."<br>";
	   print_r($array);
   }
}

$ob=new CallDemo();
//This Function is exist in this class then call() not called
//echo $ob->add(20,30);

//This sum() is Not exist in this class then call() Automatic Call.Remove Comment

echo $ob->sum(20,9);





?>