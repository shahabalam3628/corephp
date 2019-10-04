<?php
// Example: 0 1 1 2 3 5 8 13 21
function fibonacci_series($number)
{
$first=0;
$second=1;
echo $first . $second;
	for($i=2;$i<=$number;$i++)
	{
		$third=$first+$second;
		echo $third;
		$first=$second;
		$second=$third;
		
	}
}

fibonacci_series(10);