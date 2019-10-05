<?php
function __autoload($class)
{
	include_once"Files/$class.php";
}

$obj1=new Abc();
echo $obj1->f1();

?>