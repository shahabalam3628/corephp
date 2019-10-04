<?php

function find_table($number)
 {
	  $table=null;
	  echo "<p>Table OF $number</p>";
	  for($i=1;$i<=10;$i++)
	  {
		  echo "$number".'x'."$i=".$number*$i."<br>";
	  }
 }

 find_table(20);



?>