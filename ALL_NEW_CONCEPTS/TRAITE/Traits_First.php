<?php

trait Trait_First
{
	public function test()
	{
		echo "Welcome";
	}
}

class Abc
{
	use Trait_First;
}

$obj=new Abc();
echo $obj->test();


?>