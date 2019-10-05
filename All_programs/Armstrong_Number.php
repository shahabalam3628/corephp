<?php

function armstrong($number)
{
$tmp=$number;
$sum=0;
  while($number!=0)
    {
	  $rem=$number%10;
	  $sum=$sum+$rem*$rem*$rem;
	  $number=$number/10;
	  //echo $sum; 
   }
  if($tmp==$sum)
	  echo "Armstrong";
  else
	  echo "Not Armstrong";

}

armstrong(153);









?>