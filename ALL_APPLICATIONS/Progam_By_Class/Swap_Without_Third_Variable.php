<?php
Class Swap
{
	public function swap_number($val1,$val2)
	{
		echo "Before Swap val1=$val1 And val2=$val2"."<br>";
		$val1=$val1+$val2; //50
		$val2=$val1-$val2; //20
		$val1=$val1-$val2; //
		echo "After Swap val1=$val1 And val2=$val2";
	}
}

$obj=new Swap();
$result=$obj->swap_number(20,30);


