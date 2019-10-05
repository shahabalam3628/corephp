<?php

class Utilis 
{
  static public function addToNumCars()
  {
    echo "Welcome In Stattic Method.";
  }
}

//Static function not call by any object.Static function call by class Name.
$result=Utilis::addToNumCars(); //Accessing Static Method Without Creating any Object.
echo $result;
 