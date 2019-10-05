<?php

function factorial($number)
{

	$factorial=1;
	$old_nmber=$number;
	if($number<0)
	{
		echo "Factorial is not possible.";
	}
	else
	{
		while($number>0)
		{
			$factorial=$factorial*$number;
			$number--;
		}
			
	}
	echo  "Factorial of $old_nmber is $factorial";
}

factorial(5);


