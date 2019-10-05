<?php
// Example of dependency Injection
class HardDrive
{
   public function drive()
   {
	   echo "Hardrve Message.";
   }
}
class Computer
{
	public $hdrive;
	
	public function __construct($getdrive)
	{
		$this->hdrive=$getdrive;
	}
	public function getDrive()
	{
	   $this->hdrive->drive();
	  
	}
}



$hardriveobj=new HardDrive();
$computerobj=new Computer($hardriveobj);
$computerobj->getDrive();


?>