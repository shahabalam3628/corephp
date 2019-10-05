<?php

class A 
{
    public $b;

    public function __construct(B $b) 
	{
        $this->b = $b;
    }
}


class B 
{
    public $a;

    public function setA(A $a)
	{
        $this->a = $a;
    }
}



$b = new B();
$a = new A($b);
$b->setA($a);

?>