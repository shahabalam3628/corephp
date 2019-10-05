<?php
include("connection.php");

$id        =    $_POST['update_id'];
$name      =    $_POST['update_name'];
$emaile    =    $_POST['update_email'];
$mobile    =    $_POST['update_mobile'];
$message   =    $_POST['update_message'];


  $sql="update mytable set name=$name,email=$emaile,mobil=$mobile,message=$message where id=$id";
  echo $sql; die;
  $update=$con->query($sql);
  

?>