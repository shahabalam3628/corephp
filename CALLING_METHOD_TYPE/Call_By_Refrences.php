<?php

function call_by_refrences(&$a)
{
   $a=30+$a;
}

$b=20;
call_by_refrences($b);

echo $b;





?>