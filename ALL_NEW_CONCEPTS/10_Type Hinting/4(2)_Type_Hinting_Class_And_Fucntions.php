<?php

class BaseClass
{
	public function f1()
	{
		echo "Base Class Function f1 Data";
	}
}


function TypeHintDemo(BaseClass $obj)
{
	$obj->f1();
}

$BaseClass=new BaseClass();

TypeHintDemo($BaseClass);


?>