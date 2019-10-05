<?php
class Demo
{
};
$a=new Demo();
//$a=55;
$res=is_object($a);
if($res==1)
printf("Yes");
else
printf("No");
?>