<?php

class Test1 //Base Class 
{
    public function __construct() 
      {
      }
    public function test_method()
      {
         echo 'Type Hinting in PHP works';
      }
}


class Typehinting_Test
{
    public function type_hint_method(Test1 $parameter)  // Type Hinting 
        {
         $parameter->test_method();
        }
}



$th_test = new Typehinting_Test();
$t1 = new Test1();
$th_test->type_hint_method($t1);  //Passing $object of base class into the child class method.
?>