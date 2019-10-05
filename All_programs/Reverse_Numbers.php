<?php

/*

$val=123456;
$len=strlen($val);

while($len>=1)
{
   $rem=$val/10;
   $rev_num=$rem;
   $len--;	
}  
echo $rev_num;


*/



 
$num = 2039;
$revnum = 0;
while ($num != 0)
{
	$revnum = $revnum * 10 + $num % 10;
	//below cast is essential to round remainder towards zero
	$num = (int)($num / 10); 
}
 
echo "Reverse number: $revnum\n";

?>