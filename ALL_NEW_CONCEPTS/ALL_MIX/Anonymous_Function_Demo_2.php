<?php

$lambda_function_demo= function($number)
{
	if($number > 0)
    echo "Posative Number";
    else
	echo "Negative Number";	
};

echo $lambda_function_demo(4);

?>