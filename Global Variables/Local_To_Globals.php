<?php

function  local_to_globals()
{
  $a=50;
  $GLOBALS['b']=$a;
}

local_to_globals();

echo $b;



?>