<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$array1=array('name'=>'shahab','dep'=>'MCA','roll'=>'20');
$array2=array('abc'=>'XYZ');

foreach($array2 as $key=>$value)
{
   array_push($array1,$value);
}

print_r($array1);
?>


</body>
</html>
