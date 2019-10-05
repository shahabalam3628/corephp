<?php

$word = ' World';
$lambda = function() use(& $word) 
{
    $result = 'Hello' . $word;
    $word = 'Bye World';
    return $result;
};

echo $lambda();
echo $word;