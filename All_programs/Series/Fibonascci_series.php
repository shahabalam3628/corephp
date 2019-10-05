<?php
$i=1;
$n=10;
$n1=0;
$n2=1;


while($i<$n)
{
   $series=$n1+$n2;
   echo $series." ";
   $n1=$n2;
   $n2=$series;
   $i++;
}



?>