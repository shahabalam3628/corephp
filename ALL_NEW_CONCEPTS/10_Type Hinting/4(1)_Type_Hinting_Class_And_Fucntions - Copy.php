<?php
class Test1
 {
    public $var = 'this is test';
 }
 
 function typehint(Test1 $t1)
    {
        echo $t1->var;
    }
typehint(new Test1()); 
?>