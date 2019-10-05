<?php
include("Main_Exception.php");
class Second extends ExceptionHandling
{

	function process($denominator)
	{
		try
		{
			if ($denominator == 0)
			{
				throw new divideByZeroException();
			}
			else if ($denominator < 0)
			{
				throw new DivideByNegativeException();
			}
			else
			{
				return  25 / $denominator;
			}
		}
		catch (DivideByZeroException $ex)
		{
			echo $ex->getMessage();
		}
		catch (DivideByNegativeException $ex)
		{
			echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
		}
		catch (Exception $x)
		{
		echo "UNKNOWN EXCEPTION!";
		}
	}


}

$ob=new Second();
echo $ob->process(0);


?>