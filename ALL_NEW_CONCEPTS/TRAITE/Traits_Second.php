<?php

trait Calculator
{
	public function add($a,$b)
	{
		return $a+$b;
	}
}

class Abc
{
	use Calculator;
}

$obj=new Abc();
echo $obj->add(30,50);


?>