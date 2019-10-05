<?php

$data="Shahab";
$clousure=function() use($data)
{
	return 'Hello'.$data;
};
echo $clousure();
