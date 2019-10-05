<?php

trait my_first_trait_demo
{
	public function check_even_odd($number)
	{
		if($number%2==0)
			echo "Even";
		    else
			echo "Odd";	
	}
	
};
class Traits_Demo 
{
	use my_first_trait_demo;
}

$obj=new Traits_Demo();
echo $obj->check_even_odd(3);

?>