<?PHP


functon series($limit)
{
  $first=0;
  $second=1;
  for($i=0;$i<$number;$i++)
  {
     $third=$first+$second;
     echo $third;
     $first=$second;
     $second=$third;
  }
} 

?>