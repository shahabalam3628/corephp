<?php

// Which Number Divide it self is called prime Number.

function check_prime_number($number)
{
	 for($i=2;$i<=$number;$i++)
	 {
		 if($number%$i==0)
		 {
			 break;
		 }
	 }
	 if($number==$i)
         echo "$number is prime";
	 else
		 echo "$number is not prime"; 
}

check_prime_number(11);


?>