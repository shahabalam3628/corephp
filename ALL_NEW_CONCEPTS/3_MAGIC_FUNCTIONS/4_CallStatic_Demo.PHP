<?php
Class CallStaticDemo
{
   public static function add($a,$b)
   {
      return $a+$b;
   }
   public static function __callStatic($name,$array)
   {
	   echo "The $name Function Not Exist or Not static Function"."<br>";
	   print_r($array);
   }
}

//True Call
//echo CallStaticDemo::add(3,8);  //add name ka static function hai isliye iske call pe __callStatic() execute nhi hoga.

//Wrong Static function call.
echo CallStaticDemo::add2(9,9);  //add2 name ka koi static function nhi hai isliye __callStatic() Automatic Execute hoga.