<?php
Class Even_Odd
{
	public function check_even_odd($number)
	{
		if($number%2==0){
			return "Given Number Is Even";
		}else{
			return "Given Number Is Odd";
		}
	}
}

$obj=new Even_Odd();
$result=$obj->check_even_odd(2221);
echo $result;