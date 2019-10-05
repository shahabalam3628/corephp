<?php

class Test
{
  public function first()
  {
	return "Welcome";
  }
}

class Test2 
{
	public $test;
	public function __construct($arg)
	{
		$this->test=$arg;
	}
	public function get_message()
	{
		//$this->test=new Test();
		 $mess=$this->test->first();
		 echo $mess;
	}
}

$t=new test();
$t2=new Test2($t);
$t2->get_message();



?>