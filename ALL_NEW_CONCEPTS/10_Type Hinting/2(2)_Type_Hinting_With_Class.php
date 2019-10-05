<?php


class BaseClass
{
	public function f1()
	{
		echo "Base Class Function f1 Data";
	}
}

class ChildClass
{
	public function f2(BaseClass $obj)
	{
		$obj->f1();
	}
}

$obj1=new ChildClass();
$obj2=new BaseClass();
$obj1->f2($obj2);


?>