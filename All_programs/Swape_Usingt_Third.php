<?php

$a=10;
$b=30;
$c;

echo "<p>Before Swape </p>";

echo "a=".$a."b=".$b;

$c=$a;
$a=$b;
$b=$c;

echo "<p>After Swape</p>";
echo "a=".$a."b=".$b;



?>