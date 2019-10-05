<?php

//However to access static methods and static properties from within an instance of the class, you use  self  instead of  $this as follows

class Utilis 
{
  static public $numCars = 0; 
  static public function addToNumCars($int)
  {
    $int = (int)$int;
    self::$numCars=$int+1;
  }
}

echo Utilis::$numCars."<br>";  //Accessing Static Property


echo Utilis::addToNumCars(5); //Accessing Static Method Without Creating any Object.
echo Utilis::$numCars."<br>";
 