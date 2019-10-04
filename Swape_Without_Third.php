<?php

$a=10;
$b=30;

echo "<p>Before Swape </p>";

echo "a=".$a."b=".$b;

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "<p>After Swape</p>";
echo "a=".$a."b=".$b;



?>