<?php
$a=2;
echo "Without Converting"."<br>";
$res1=gettype($a);
echo $res1."<br>";
echo "After Converting"."<br>";
settype($a,'double');
$res2=gettype($a);
echo $res2."<br>";
?>