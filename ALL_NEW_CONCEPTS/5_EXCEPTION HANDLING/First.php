<?php 

class ExceptionFirst
{
   public function add($a,$b)
   {
        try
		{
		   	if($a<$b)
			{
			  throw new Exception("The first parameter must be greater than second parameter");
			}
			else
			{
			  return $a+$b;
			}
		}
		catch(Exception $e)
		{
		  echo 'Error: ' .$e->getMessage();
		}
   }
}

$ob=new ExceptionFirst();
echo $ob->add(60,36);


?>