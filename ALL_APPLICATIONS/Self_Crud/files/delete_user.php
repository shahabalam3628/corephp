<?php 
include("connection.php");
  
  $id=$_POST['id'];
  $sql="delete from mytable where id=$id";
  $delete=$con=$con->query($sql);
  

?>