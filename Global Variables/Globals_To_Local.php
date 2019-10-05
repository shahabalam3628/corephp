<?php
$a=30;
function add()
{
  $b=$GLOBALS['a']; 
  echo "Global Variable Works As Local=".$b;  
}

add();



?>