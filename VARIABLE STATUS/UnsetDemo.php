<?php
function Foo()
{
static $bar;
$bar++;
echo "Before Unse:$bar";
unset($bar);
$bar=23;
echo "After Unset:$bar"."<br>"; 
}
Foo();
Foo();
Foo();
?>